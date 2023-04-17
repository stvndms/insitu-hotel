<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Guest;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::all();
        return view('receptionist.guest.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('receptionist.guest.create', compact('countries'));
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
            'guest_name' => ['required', 'max:255'],
            'email' => ['required', 'email:dns,rfc', 'unique:users'],
            'guest_photo' => ['image', 'file', 'max:3024'],
            'guest_phone' => ['required'],
            'guest_country' => ['required'],
            'guest_address' => ['required'],
            'guest_id_card' => ['image', 'file', 'max:3024']
        ];

        $validatedData = $request->validate($validation);

        $password = Str::random(30);
        $user = User::create([
            'name' => $validatedData['guest_name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($password),
            'role' => 'guest',
            'random_str' => Str::random(30)
        ]);

        if ($request->file('guest_photo') || $request->file('guest_id_card')) {
            Guest::create([
                'user_id' => $user->id,
                'has_account' => 1,
                'guest_name' => $validatedData['guest_name'],
                'guest_photo' => $request->file('guest_photo')->store('uploaded-images'),
                'guest_phone' => $validatedData['guest_phone'],
                'guest_country' => $validatedData['guest_country'],
                'guest_address' => $validatedData['guest_address'],
                'guest_id_card' => $request->file('guest_id_card')->store('uploaded-images'),
            ]);
        } else {
            Guest::create([
                'user_id' => $user->id,
                'has_account' => 1,
                'guest_name' => $validatedData['guest_name'],
                'guest_phone' => $validatedData['guest_phone'],
                'guest_country' => $validatedData['guest_country'],
                'guest_address' => $validatedData['guest_address'],
            ]);
        }

        return redirect(route('guest.index'))->with('message', 'password : ' . $password);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        $data = Guest::where('id', $guest->id)->get();
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        $rules = [
            'guest_name' => ['required', 'max:255'],
            'guest_photo' => ['image', 'file', 'max:3024'],
            'guest_phone' => ['required'],
            'guest_country' => ['required'],
            'guest_address' => ['required'],
            'guest_id_card' => ['image', 'file', 'max:3024']
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('guest_photo')) {
            if ($guest->guest_photo) {
                Storage::delete($guest->guest_photo);
            }
            $validatedData['guest_photo'] = $request->file('guest_photo')->store('uploaded-images');
        }
        Guest::where('id', $guest->id)->update($validatedData);
        // return
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        Guest::destroy($guest->id);
        // return
    }

    public function indexApi()
    {
        $guests = Guest::all();
        return response()->json(["guest" => $guests], 200);
    }

    public function createApi(Request $request)
    {
        $rules = [
            'guest_name' => ['required', 'max:255'],
            'guest_photo' => ['image', 'file', 'max:3024'],
            'guest_phone' => ['required'],
            'guest_country' => ['required'],
            'guest_address' => ['required'],
            'guest_id_card' => ['image', 'file', 'max:3024']
        ];
        $validatedData = $request->validate($rules);
        Guest::create($validatedData);
        return response()->json(['guest' => $validatedData], 201);
    }

    public function updateApi(Request $request, Guest $guest)
    {
        $rules = [
            'guest_name' => ['required', 'max:255'],
            'guest_photo' => ['image', 'file', 'max:3024'],
            'guest_phone' => ['required'],
            'guest_country' => ['required'],
            'guest_address' => ['required'],
            'guest_id_card' => ['image', 'file', 'max:3024']
        ];
        $validatedData = $request->validate($rules);
        Guest::where('id', $guest->id)->update($validatedData);
        return response()->json(['guest' => $validatedData], 200);
    }

    public function deleteApi(Guest $guest)
    {
        Guest::destroy($guest->id);
        $date = Carbon::now()->toDateTimeString();
        return response()->json([
            'message' => 'Data tamu sudah dihapus',
            'status' => '200',
            'reason' => 'OK',
            'timestamp' => $date
        ], 200);
    }
}
