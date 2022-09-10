<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\hospital\AuthController as HospitalAuthController;
use App\Http\Controllers\web\ProfileUpdate;
use App\Http\Controllers\web\WebController;
use Brick\Math\Exception\RoundingNecessaryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Web Contrller
Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home')->name('home');
});

// user Auth Contrller
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('register');
    Route::get('/verify', 'verifyPage')->name('verify');
    Route::post('/',  'create')->name('register');
    Route::post('/verify', 'verify')->name('verify');
});

Route::get('/profile-update', [ProfileUpdate::class], 'update');

Route::controller(HospitalAuthController::class)->group(function () {
});
Route::get('hospital', function () {
    return view('auth.hospital');
});
