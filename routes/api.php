<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\CardController;
use Illuminate\Support\Facades\Route;

Route::apiResource('student', StudentController::class);
Route::apiResource('account', AccountController::class);
Route::apiResource('card', CardController::class);
