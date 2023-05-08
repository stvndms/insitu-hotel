<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Facility;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $title = 'Administrator Dashboard';
            return view('admin.index', compact('title'));

        } elseif (Auth::user()->role === 'receptionist') {
            $title = 'Receptionist Dashboard';
            return view('receptionist.index', compact('title'));

        } elseif (Auth::user()->role === 'superAdmin') {
            $title = 'superAdmin Dashboard';
            return view('superAdmin.index', compact('title'));

        } else {
            $title = 'Guest Dashboard';
            $roomTypes = RoomType::all();
            $facilities = Facility::all();
            $guest = Auth::user()->guest;
            return view('guest.profile', compact('title', 'roomTypes', 'facilities', 'guest'));
        }
    }

}
