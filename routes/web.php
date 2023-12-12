<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlachtController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('ambtenaar/dashboard');
})->name('medewerker');

Route::get('/indienen', [KlachtController::class, 'create'])->name('klacht.create');
Route::post('/klacht', [KlachtController::class, 'store'])->name('klacht.store');
