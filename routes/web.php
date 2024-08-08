<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\VariantController;

// Redirect root URL to the menus index
Route::get('/', function () {
    return redirect()->route('menus.index');
});

Route::resource('menus', MenuController::class);
Route::resource('additionals', AdditionalController::class);
Route::resource('variants', VariantController::class);

