<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/midterm', function () {
    return 'Welcome to Laravel Midterm Exam';
});

Route::get('/student', function () {
    $students = DB::table('students')->get();
    return view('student', compact('students'));
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/form', function (Request $request) {
    DB::table('students')->insert([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'age' => $request->input('age'),
    ]);

    return redirect('/student');
});