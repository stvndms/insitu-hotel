<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        $roomTypes = RoomType::all();
        $facilities = Facility::all();

        return view('landing.index', compact('roomTypes', 'facilities'));
    }

    public function room()
    {
        $roomTypes = RoomType::all();

        return view('landing.room', compact('roomTypes'));
    }

    public function facility()
    {
        $facilities = Facility::all();
        $count = $facilities->count();

        return view('landing.facility', compact('facilities', 'count'));
    }


}
