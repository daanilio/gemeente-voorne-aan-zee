<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlachtController;

Route::get('/', function () {return view('index');})->name('index');
Route::get('/dashboard', function () {return view('medewerker/dashboard');})->name('medewerker');
Route::get('/klacht', function () {return view('klachtIndienen');})->name('klachtIndienen');

Route::get('/index', [KlachtController::class, 'index'])->name('klacht.index');
Route::post('/klacht', [KlachtController::class, 'store'])->name('klacht.store');
