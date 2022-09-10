<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\hospital\AuthController as HospitalAuthController;
use App\Http\Controllers\web\ProfileUpdate;
use App\Http\Controllers\web\WebController;

use Illuminate\Support\Facades\Route;

// Web Contrller
Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('web');
    Route::get('/home', 'home')->name('home');
    Route::get('/search', 'search');
    Route::get('/logout', 'logout')->name('logout');
});

// user Auth Contrller
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('register');
    Route::get('/verify', 'verifyPage')->name('verify');
    Route::post('/',  'create')->name('register');
    Route::post('/verify', 'verify')->name('verify');
    Route::get('/profile/next-step', 'nameUpdate')->name('update.name');
});

Route::get('/profile-update', [ProfileUpdate::class], 'update');

Route::controller(HospitalAuthController::class)->group(function () {
    Route::get('hospital/add', 'index');
    Route::get('/hospital/verify', 'verify')->name('hospital.verify');
});
