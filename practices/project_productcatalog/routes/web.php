<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {

    $products = [
        ['name' => 'Laptop', 'price' => 1200, 'stock' => 5],
        ['name' => 'Mouse', 'price' => 25, 'stock' => 0],
        ['name' => 'Keyboard', 'price' => 75, 'stock' => 10],
    ];

    return view('products', compact('products'));
});