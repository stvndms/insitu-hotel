<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/table', function () {
    return view('admin.room.room');
});

Route::get('/fasility', function () {
    return view('admin.facility.fasility');
});

Route::get('/log', function () {
    return view('admin.log');
});

Route::get('/create', function () {
    return view('admin.create');
});

Route::get('/receptionist', function () {
    return view('admin.receptionist.dashboard');
})->name('receptionist.index');