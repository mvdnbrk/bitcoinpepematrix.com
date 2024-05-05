<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemeController;
use App\Http\Controllers\HomepageController;

Route::get('/', HomepageController::class)->name('homepage');
Route::get('/memes', MemeController::class)->name('memes');
