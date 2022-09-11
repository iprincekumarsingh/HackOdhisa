<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\hospital\AuthController as HospitalAuthController;
use App\Http\Controllers\hospital\WeBController as HospitalWeBController;
use App\Http\Controllers\web\ProfileUpdate;
use App\Http\Controllers\web\WebController;

use Illuminate\Support\Facades\Route;

// Web Contrller
Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('web');
    Route::get('/home', 'home')->name('home');
    Route::get('/search', 'search');
    Route::get('/logout', 'logout')->name('logout');

    Route::get('/profile','profile')->name('profile');
    Route::get('/book','book-hospital')->name('book.user.hospital');


    Route::post('/search','searhc')->name('route');
    Route::post('/book-hospital','bookHostpital')->name('book.hospital');
    Route::post('/profile-upadte','profile-update')->name('profile.update');

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
    Route::get('/h-login', 'login')->name('login');
    Route::get('/hospital/dashboard', 'home')->name('home.index')->middleware('WebGuard');
    Route::get('hospital/add', 'index')->middleware('WebGuard');
    Route::get('/hospital/verify', 'hVerify')->name('hospital.verify');


    Route::post('/h-login','create')->name('login');
    Route::post('/h-verify','verify')->name('h.verify');
});
Route::controller(HospitalWeBController::class)->group(function () {

    Route::get('/booking', 'booking')->name('hospital.booking')->middleware('WebGuard');
    Route::get('/bed-deatils', 'bed')->name('hospital.bed')->middleware('WebGuard');
    Route::get('account', 'account')->name('hospital.profile')->middleware('WebGuard');

    Route::post('bedupdate','bedupdate')->name('bedupdate');
});
