<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlachtController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::middleware('can:medewerker')->group(function () {

    Route::get('dashboard', function () {
        return view('medewerkers/dashboard');
    })->name('medewerkers');

});

Route::middleware('auth')->group(function () {
    Route::get('klacht', [KlachtController::class, 'index'])->name('klacht.index');
    Route::post('klacht', [KlachtController::class, 'store'])->name('klacht.store');
});

//Login/register routes
Route::get('registreer', [RegisterController::class, 'create'])->middleware('guest')->name('registreer');
Route::post('registreer', [RegisterController::class, 'store'])->middleware('guest')->name('registreer');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest')->name('sessions');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');