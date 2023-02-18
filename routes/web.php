<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RoomTypeController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
})->middleware('guest');

//route login
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', function () {
    return view('login.index');
});

//route register
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('store')->middleware('guest');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

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

Route::get('/facility/create-new', function() {
    return view('admin.facility.create');
});

// Route /facility
Route::resource('/facility', FacilityController::class)->except('edit');
Route::get('/facility/{facility:random_str}/edit', [FacilityController::class, 'editEdit'])->name('facility.edit');

// Route /room-type
Route::resource('/room-type', RoomTypeController::class)->except('edit');
Route::get('/room-type/{roomType:random_str}/edit', [RoomTypeController::class, 'edit'])->name('room-type.edit');

// Route /room
Route::resource('/room', RoomController::class)->except('edit');
Route::get('/room/{room:random_str}/edit', [RoomController::class, 'edit'])->name('room.edit');

// Route /log
Route::get('/log', [LogController::class, 'index'])->name('log.index');
Route::get('/receptionist', function () {
    return view('admin.receptionist.dashboard');
})->name('receptionist.index');