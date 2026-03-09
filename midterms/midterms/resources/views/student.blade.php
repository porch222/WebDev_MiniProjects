<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
</head>
<body>
    <h1>Student Information Page</h1>

    @foreach ($students as $student)
        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>Age:</strong> {{ $student->age }}</p>
        <hr>
    @endforeach

</body>
</html>