<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalculateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}/{lastname}', [UserController::class, 'user']);

Route::get('/calculate/{operation}/{num1}/{num2}', [CalculateController::class, 'calculate']);