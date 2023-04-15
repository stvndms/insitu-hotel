<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Helper\Helper;
use App\Models\Facility;

use App\Models\RoomType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.room.room', compact('rooms'));
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
        $validatedData['room_status'] = 'ready';
        $validatedData['random_str'] = Str::random(30);
        $validatedData['room_image'] = $request->file('room_image')->store('uploaded-images');
        Room::create($validatedData);
        Helper::createLog("Create a new Room : " . $validatedData['room_number']);
        return redirect(route('room.index'));
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
        $roomTypes = RoomType::all();
        $facilities = Facility::all();
        return view('admin.room.edit', compact('room', 'roomTypes', 'facilities'));
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
            'room_type_id' => ['required'],
            'facility_id' => ['required'],
            'room_price' => ['required'],
            'room_image' => ['image', 'file', 'max:3024']
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('room_image')) {
            if ($room->room_image) {
                Storage::delete($room->room_image);
            }
            $validatedData['room_image'] = $request->file('room_image')->store('uploaded-images');
        }
        Room::where('id', $room->id)->update($validatedData);
        Helper::createLog("Update Room : " . $room->room_number . " to : " . $validatedData['room_number']);
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
        $oldRoom = $room->room_number;
        Room::destroy($room);
        Helper::createLog("Delete Room : " . $oldRoom);
        return redirect(route('room.index'));
    }
}
