<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard'])->name('/');
Route::get('user-dashboard', [DashboardController::class, 'userDashboard'])
    ->name('user.dasboard')
    ->middleware(['auth', 'role:admin|user']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('roles', RoleController::class);
});

Route::view('adminDashboard', 'adminDashboard');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot.password');
