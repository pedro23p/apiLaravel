<?php

use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;

Route::apiResource('places', PlaceController::class);
