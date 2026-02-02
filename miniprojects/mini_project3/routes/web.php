<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/default', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get("/students", [StudentController::class, 'index']);
