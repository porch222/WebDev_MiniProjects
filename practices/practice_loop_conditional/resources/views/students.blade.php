<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Student List</h1>

    @if(count($students) > 0)

        <ul>
            @foreach($students as $student)
                <li>
                    Name: {{ $student['name'] }} <br>
                    Age: {{ $student['age'] }}

                    @if($student['age'] >= 18)
                        - Adult
                    @else
                        - Minor
                    @endif
                </li>
                <hr>
            @endforeach
        </ul>

    @else
        <p>No students found.</p>
    @endif

</body>
</html>