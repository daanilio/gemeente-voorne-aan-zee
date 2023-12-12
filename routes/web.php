<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlachtController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('medewerker/dashboard');
})->name('medewerker');

Route::get('/indienen', [KlachtController::class, 'create'])->name('klacht.create');
Route::post('/klacht', [KlachtController::class, 'store'])->name('klacht.store');
