<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/profile', function () {
    return view('profile', [
        'name' => 'Burger',
        'age' => 20
    ]);
});

Route::get('/students', function () {
    $students = [
        ['name' => 'Bob', 'age' => 20],
        ['name' => 'TheO', 'age' => 16],
        ['name' => 'Builder', 'age' => 18],
    ];

    return view('students', compact('students'));
});