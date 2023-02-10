<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

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
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $validatedData['guest_photo'] = $request->file('guest_photo')->store('uploaded-images');
        $validatedData0['guest_id_card'] = $request->file('guest_id_card')->store('uploaded-images');
        Guest::create($validatedData);
        // 
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
}
