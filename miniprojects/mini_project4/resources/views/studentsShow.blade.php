<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student</title>
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
        p {
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>{{ $student['name'] }}</h1>

    <p><strong>ID:</strong> {{ $student['id'] }}</p>
    <p><strong>Email:</strong> {{ $student['email'] }}</p>

    <a href="/students">← Back to Students</a>
</div>
</body>
</html>
