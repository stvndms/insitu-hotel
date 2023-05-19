<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Room;
use App\Models\User;
use App\Models\Guest;
use App\Models\Country;
use App\Models\Facility;
use App\Models\RoomType;
use App\Models\Reservation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class GuestPageController extends Controller
{
    public function book(Request $request)
    {
        $roomTypes = RoomType::all();
        $facilities = Facility::where('facility_type', 'room')->get();
        $room_type_id = $request['roomType'];
        return view('guest.book', compact('roomTypes', 'facilities', 'room_type_id'));
    }

    public function storeBook(Request $request)
    {
        $rules =  [
            'guest_id' => 'required',
            'reservation_start_date' => 'required',
            'reservation_end_date' => 'required'
        ];

        $room = Room::where('room_type_id', $request['room_type_id'])->where('room_status', 'ready')->first();

        $validatedData = $request->validate($rules);
        $validatedData['reservation_id'] = Str::uuid();
        $validatedData['room_id'] = $room->id;
        $validatedData['status'] = 'reserved';

        Reservation::create($validatedData);

        $reservation = Reservation::latest()->first();
        $bill = new Bill();
        $bill->invoice_no = Str::uuid();
        $bill->reservation_id = $reservation->id;
        $bill->tax = 0.1;
        $bill->room_charge = $reservation->room->roomType->price;
        $bill->etc_charge = 100;
        $bill->total_charge = $bill->room_charge + $bill->etc_charge + (($bill->room_charge + $bill->etc_charge) * $bill->tax);
        $bill->payment_due_date = $reservation->created_at;
        $bill->status = 'unpaid';
        $bill->save();

        $room->update([
            'room_status' => 'booked'
        ]);

        return redirect(route('payment', $reservation->reservation_id));
    }

    public function payment(Reservation $reservation)
    {
        $bill = Bill::where('reservation_id', $reservation->reservation_id);
        return view('guest.payment', compact('reservation', 'bill'));
    }

    public function storePayment(Request $request, Bill $bill)
    {
        $rules = [
            'proof_of_payment' => ['image', 'file', 'max:3024']
        ];

        $validatedData = $request->validate($rules);

        $validatedData['proof_of_payment'] = $request->file('proof_of_payment')->store('payment');

        $bill->update([
            'proof_of_payment' => $validatedData['proof_of_payment'],
            'status' => 'process'
        ]);

        return redirect(route('home'));
    }

    public function editProfile(Guest $guest)
    {
        $countries = Country::all();
        return view('guest.profile.edit', compact('guest', 'countries'));
    }

    public function updateProfile(Request $request, Guest $guest)
    {
        $rules = [
            'guest_name' => 'required',
            'email' => 'required',
            'guest_phone' => 'required',
            'guest_country' => 'required',
            'guest_address' => 'required',
        ];

        $validatedData = $request->validate($rules);

        // find guest user account and update it
        $user = User::where('id', $guest->user_id);
        $user->update([
            'name' => $validatedData['guest_name'],
            'email' => $validatedData['email'],
        ]);

        $guest->update([
            'guest_name' => $validatedData['guest_name'],
            'guest_phone' => $validatedData['guest_phone'],
            'guest_country' => $validatedData['guest_country'],
            'guest_address' => $validatedData['guest_address']
        ]);

        if ($guest->guest_photo) {
            Storage::delete($guest->guest_phone);
            $guest->update([
                'guest_photo' => $request->file('guest_photo')->store('uploaded-images')
            ]);
        }

        return redirect(route('dashboard'));
    }

    public function mybooking()
    {
        $user = Auth::user();
        $reservations = Reservation::where('guest_id', $user->guest->id)->get();
        return view('guest.booking.mybooking', compact('reservations'));
    }

    public function detailBooking(Reservation $reservation)
    {
        return view('guest.booking.detail');
    }
}
