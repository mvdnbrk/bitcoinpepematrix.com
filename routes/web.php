<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MemeController;
use App\Http\Resources\RunePricesCollection;
use App\Models\RunePrice;
use Illuminate\Support\Facades\Route;

Route::get('/', HomepageController::class)->name('homepage');
Route::get('/memes', MemeController::class)->name('memes');

Route::get('/api/chart', function () {
    return new RunePricesCollection(
        Runeprice::take(1000)->latest()->get()
    );
});
