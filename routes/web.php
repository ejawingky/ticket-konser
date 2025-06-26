<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\ReportController;

// Public
Route::get('/', fn() => redirect('/order-ticket'));
Route::get('/order-ticket', [TicketController::class, 'create']);
Route::post('/order-ticket', [TicketController::class, 'store']);
Route::get('/ticket/{kode}', [TicketController::class, 'show']);

// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Protected
Route::middleware(['auth'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/admin/update/{id}', [AdminController::class, 'update']);
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy']);

    Route::get('/checkin', [CheckinController::class, 'index']);
    Route::post('/checkin', [CheckinController::class, 'check']);

    Route::get('/report', [ReportController::class, 'index']);
});
