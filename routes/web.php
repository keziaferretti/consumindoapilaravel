<?php

use App\Http\Controllers\apiController;
use Illuminate\Support\Facades\Route;


Route::get('/', [apiController::class, 'index']);