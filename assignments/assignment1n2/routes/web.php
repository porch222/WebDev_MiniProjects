<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products/{id?}', function ($id = 100) {
    return view('products', ['id' => $id]);
})->name('products.id');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth.custom');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/dashboard');
    }

    return back()->with('error', 'Invalid credentials');
})->name('login.submit');