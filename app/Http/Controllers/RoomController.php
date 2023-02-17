<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Helper\Helper;
use App\Models\Facility;

use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.room.room');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        $roomTypes = RoomType::all();
        $facilities = Facility::all();
        return view('admin.room.create', compact('roomTypes', 'facilities'));
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
            'room_number' => ['required'],
            'room_type_id' => ['required'],
            'facility_id' => ['required'],
            'room_price' => ['required'],
            'room_image' => ['image', 'file', 'max:3024']
        ];
        $validatedData = $request->validate($rules);
        $validatedData['random_str'] = Str::random(30);
        $validatedData['room_image'] = $request->file('room_image')->store('public/uploaded-images');
        $validatedData['room_image'] = substr($validatedData['room_image'], 7);
        Room::create($validatedData);
        Helper::createLog("Data kamar dengan nomor " + $validatedData['room_number'] + " telah berhasil dibuat", "username");
        return redirect('/room');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $rules = [
            'room_number' => ['required'],
            'room_type' => ['required', Rule::in('regular_twin_bed', 'regular_double_bed')],
            'room_price' => ['required'],
            'room_image' => ['image', 'file', 'max:3024']
        ];
        $validatedData->validate($rules);
        if ($request->file('room_image')) {
            if ($room->room_image) {
                Storage::delete($room->room_image);
            }
            $validatedData['room_image'] = $request->file('room_image')->store('public/uploaded-images');
            $validatedData['room_image'] = substr($validatedData['room_image'], 7);
        }
        Room::where('id', $room->id)->update($validatedData);
        return redirect(route('room.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
