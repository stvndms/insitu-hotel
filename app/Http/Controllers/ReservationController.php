<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Facility;
use App\Models\Reservation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('receptionist.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guests = Guest::all();
        $rooms = Room::where('room_status', '!=', 'booked')->get();
        $facilities = Facility::all();

        return view('receptionist.reservation.create', compact('guests', 'rooms', 'facilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = [
            'guest_id' => 'required',
            'room_id' => 'required',
            'facility_id' => 'required',
            'reservation_start_date' => 'required',
            'reservation_end_date' => 'required'
        ];

        $validatedData = $request->validate($validation);
        $validatedData['reservation_id'] = Str::uuid();
        $validatedData['status'] = 'reserved';
        Reservation::create($validatedData);

        // Set Room Status
        Room::where('id', $validatedData['room_id'])->update([
            'room_status' => 'booked'
        ]);

        return redirect(route('reservation.index'))->with('message', 'New Reservation has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('receptionist.reservation.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    public function setCheckIn(Reservation $reservation)
    {
        Room::where('id', $reservation->room_id)->update([
            'room_status' => 'check_in'
        ]);

        $reservation->update([
            'check_in' => Carbon::now()->toDateTimeString(),
            'status' => 'check_in'
        ]);

        return redirect(route('reservation.index'))->with('message', 'Guest reservation has been set to Check In');
    }

    public function setCheckOut(Reservation $reservation)
    {
        Room::where('id', $reservation->room_id)->update([
            'room_status' => 'check_out'
        ]);

        $reservation->update([
            'check_out' => Carbon::now()->toDateTimeString(),
            'status' => 'check_out'
        ]);

        return redirect(route('reservation.index'))->with('message', 'Guest reservation has been set to Check Out');
    }
}
