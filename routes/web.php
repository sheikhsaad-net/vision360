<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    abort(404);
})->name('register');

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

});