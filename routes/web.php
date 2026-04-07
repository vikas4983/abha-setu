<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
     Route::resource('siteSettings', SiteSettingController::class);
     Route::resource('banners', BannerController::class);
     Route::post('banner-status', [BannerController::class, 'bannerStatus'])->name('banner.status');
    
});
