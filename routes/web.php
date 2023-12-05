<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlachtController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [KlachtController::class, 'create'])->name('welcome');
Route::post('/klacht', [KlachtController::class, 'store'])->name('klacht.store');
