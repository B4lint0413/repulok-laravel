<?php

use App\Http\Controllers\PlaneController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PlaneController::class, 'index'])->name('home');
Route::get('/planes/{id}', [PlaneController::class, 'show'])->whereNumber('id')->name('planes.show');