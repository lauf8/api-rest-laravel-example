<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;


Route::apiResource('clients', ClientController::class);

Route::apiResource('cities', CityController::class);

Route::apiResource('sellers', SellerController::class);
