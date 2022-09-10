<?php

use App\Http\Controllers\auth\AuthController;
use Brick\Math\Exception\RoundingNecessaryException;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('auth.register');
})->name('register');

Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/', [AuthController::class,'create'])->name('register');
Route::post('/verify', [AuthController::class,'verify'])->name('verify');
// Route::get
