<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $title = 'Administrator Dashboard';
            return view('admin.userManagement.userManagement', compact('title'));

        } elseif (Auth::user()->role === 'receptionist') {
            $title = 'Receptionist Dashboard';
            return view('receptionist.index', compact('title'));

        } elseif (Auth::user()->role === 'superAdmin') {
            $title = 'superAdmin Dashboard';
            return view('superAdmin.index', compact('title'));

        } else {
            $title = 'Guest Dashboard';
            return view('guest.index', compact('title'));

        }
    }

}
