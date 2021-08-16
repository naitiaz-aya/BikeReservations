<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/reserve', [App\Http\Controllers\HomeController::class, 'reserve'])->name('reserve');
Route::get('/statistics', [App\Http\Controllers\StatisticController::class, 'statistics'])->name('statistics');
Route::get('/ticket/{id}', [App\Http\Controllers\HomeController::class, 'ticket'])->name('ticket');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('editUser')->middleware('auth');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::put('/user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('updateUser')->middleware('auth');
Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('deleteUser')->middleware('auth');

Route::post('/reservation', [App\Http\Controllers\ReservationController::class, 'store'])->name('storReservation')->middleware('auth');
Route::delete('/reservation/{id}', [App\Http\Controllers\ReservationController::class, 'destroy'])->name('deleteReservation')->middleware('auth');
Route::get('/reservations/{id}', [App\Http\Controllers\ReservationController::class, 'show'])->name('showReservation');
Route::get('/myreservation', [App\Http\Controllers\ReservationController::class, 'selfIndex'])->name('myReservation')->middleware('auth');
Route::get('/resedit/{id}', [App\Http\Controllers\ReservationController::class, 'edit'])->name('editReservation')->middleware('auth');
Route::put('/resupdate/{id}', [App\Http\Controllers\ReservationController::class, 'update'])->name('updateReservation')->middleware('auth');

