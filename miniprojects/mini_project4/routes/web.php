<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$students = [
    1 => ['id' => 1, 'name' => 'student1', 'email' => 'student1@student1.com'],
    2 => ['id' => 2, 'name' => 'student2', 'email' => 'student2@student2.com'],
    3 => ['id' => 3, 'name' => 'student3', 'email' => 'student3@student3.com'],
];

Route::get('/students', function () use ($students) {
    return view('studentsIndex', [
        'students' => $students
    ]);
});

Route::get('/students/{id}', function ($id) use ($students) {
    return view('studentsShow', [
        'student' => $students[$id]
    ]);
});