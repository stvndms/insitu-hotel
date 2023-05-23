<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsSuperAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\RoomController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\GuestPageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('home')->middleware('hasRole:guest');

//route login
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//route register
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('store')->middleware('guest');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Route /facility
Route::resource('/dashboard/facility', FacilityController::class)->middleware('hasRole:admin,superAdmin,receptionist')->except('edit');
Route::get('/facility/{facility:random_str}/edit', [FacilityController::class, 'edit'])->middleware('hasRole:admin,superAdmin')->name('facility.edit');

// Route /room-type
Route::resource('/room-type', RoomTypeController::class)->except('edit')->middleware('hasRole:admin,superAdmin,receptionist');
Route::get('/room-type/{roomType:random_str}/edit', [RoomTypeController::class, 'edit'])->name('room-type.edit')->middleware('hasRole:admin,superAdmin');

// Route /room
Route::resource('/dashboard/room', RoomController::class)->except('edit')->middleware('hasRole:admin,superAdmin,receptionist');
Route::get('/room/{room:random_str}/edit', [RoomController::class, 'edit'])->name('room.edit')->middleware('hasRole:admin,superAdmin');

// Route /user
Route::resource('/user', UserController::class)->except('edit')->middleware('hasRole:admin,superAdmin');
Route::get('/user/{user:random_str}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('hasRole:admin,superAdmin');

// Route /log
Route::get('/log', [LogController::class, 'index'])->name('log.index')->middleware('hasRole:superAdmin');
Route::get('/receptionist', function () {
    return view('admin.receptionist.dashboard');
})->name('receptionist.index');

// Route /guest (receptionist)
Route::resource('/guest', GuestController::class)->middleware('hasRole:receptionist')->except('edit');
Route::get('/guest/{guest:random_str}/edit', [GuestController::class, 'edit'])->name('guest.edit');

// Route /reservation (receptionist)
Route::resource('/reservation', ReservationController::class)->except('edit');
Route::put('/reservation/{reservation:id}/check-in', [ReservationController::class, 'setCheckIn'])->name('reservation.check-in');
Route::put('/reservation/{reservation:id}/check-out', [ReservationController::class, 'setCheckOut'])->name('reservation.check-out');

Route::get('/room', [LandingPageController::class, 'room'])->name('room');
Route::get('/facility', [LandingPageController::class, 'facility'])->name('facility');

Route::get('/booking', function () {
    return view('landing.user.booking.index');
});

Route::get('/mybooking', [GuestPageController::class, 'mybooking'])->name('my-booking');
Route::get('/mybooking/{reservation:reservation_id}', [GuestPageController::class, 'detailBooking'])->name('my-booking.detail');

Route::get('/profile', function () {
    return view('landing.user.profile.index');
})->name('profile');

Route::get('/book', [GuestPageController::class, 'book'])->name('book');

Route::post('/book', [GuestPageController::class, 'storeBook'])->name('storeBook');

Route::get('profile/update/{guest:random_str}', [GuestPageController::class, 'editProfile'])->name('profile.edit');

Route::get('/facility-guest', function () {
    return view('landing.facility');
});

Route::put('/profile/update/{guest:random_str}/update', [GuestPageController::class, 'updateProfile'])->name('profile.update');

Route::get('/payment/{reservation:reservation_id}', [GuestPageController::class, 'payment'])->name('payment');
Route::put('/payment/{bill:invoice_no}/store', [GuestPageController::class, 'storePayment'])->name('payment-store');

Route::put('/setpaid/{reservation:reservation_id}', [ReservationController::class, 'setPaid'])->name('set-paid');
