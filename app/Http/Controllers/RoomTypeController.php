<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\RoomType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomTypes = RoomType::all();
        return view('admin.roomType.roomType', compact('roomTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roomType.create');
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
            'room_type' => ['required'],
            'description' => ['required'],
            'image' => ['image', 'file', 'max:3024'],
            'price' => ['required']
        ];
        $validatedData = $request->validate($rules);
        $validatedData['random_str'] = Str::random(30);
        $validatedData['image'] = $request->file('image')->store('uploaded-images');
        RoomType::create($validatedData);
        Helper::createLog("Create a new Room Type : " . $validatedData['room_type']);
        return redirect(route('room-type.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function show(RoomType $roomType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomType $roomType)
    {
        return view('admin.roomType.edit', compact('roomType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $roomType)
    {
        $rules = [
            'room_type' => ['required'],
            'description' => ['required'],
            'image' => ['image', 'file', 'max:3024'],
            'price' => ['required']
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($roomType->image) {
                Storage::delete($roomType->image);
            }
            $validatedData['image'] = $request->file('image')->store('uploaded-images');
        }
        RoomType::where('id', $roomType->id)->update($validatedData);
        Helper::createLog("Update Room Type : " . $roomType->room_type . " to : " . $validatedData['room_type']);
        return redirect(route('room-type.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomType $roomType)
    {
        $oldRoomType = $roomType->room_type;
        Storage::delete($roomType->image);
        RoomType::destroy($roomType->id);
        Helper::createLog("Delete Room Type : " . $oldRoomType);
        return redirect(route('room-type.index'));
    }
}
