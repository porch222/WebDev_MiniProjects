@extends('layouts.app')

@section('content')

    <h2>Student List</h2>

    @foreach($students as $student)
        <div>
            <p>Name: {{ $student['name'] }}</p>
            <p>Age: {{ $student['age'] }}</p>
            <hr>
        </div>
    @endforeach

@endsection