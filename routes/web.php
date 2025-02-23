<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'session'], function () {
        Route::get('/', [SessionController::class, 'session_booking_page'])->name('session-page');
        Route::post('/upsert', [SessionController::class, 'UpsertSession'])->name('session.book.upsert');
        Route::post('/add-session-booking', [SessionController::class, 'AddSessionBooking'])->name('session.booking.add');
    });
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [SessionController::class, 'admin_dashboard'])->name('admin-dashboard');
        Route::get('/session', [SessionController::class, 'admin_session_page'])->name('admin-session-page');
        Route::post('/add-admin-session', [SessionController::class, 'AddSessionType'])->name('sessiontype.add');
    });
});
require __DIR__ . '/auth.php';
