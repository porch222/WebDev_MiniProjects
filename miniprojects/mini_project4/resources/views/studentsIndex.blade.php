<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            padding: 2rem;
        }
        h1 {
            color: #90caf9;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 0.5rem 0;
        }
        a {
            color: lightblue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Students</h1>
    <ul>
        @foreach($students as $student)
            <li>
                <a href="/students/{{ $student['id'] }}">
                    {{ $student['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
