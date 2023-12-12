<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlachtController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [KlachtController::class, 'create'])->name('index');
Route::post('/klacht', [KlachtController::class, 'store'])->name('klacht.store');
