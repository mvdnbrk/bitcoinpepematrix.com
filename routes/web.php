<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MemeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomepageController::class)->name('homepage');
Route::get('/memes', MemeController::class)->name('memes');
