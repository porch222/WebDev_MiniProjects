<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'Alice', 'age' => 20],
            ['name' => 'Bob', 'age' => 17],
            ['name' => 'Charlie', 'age' => 22],
        ];

        return view('students.index', compact('students'));
    }
}