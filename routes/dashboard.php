<?php

use App\Http\Controllers\Dashboard\CategriesController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'middleware' => ['auth']
], function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['verified'])->name('dashboard');

    Route::resource('/categories', CategriesController::class);
});
