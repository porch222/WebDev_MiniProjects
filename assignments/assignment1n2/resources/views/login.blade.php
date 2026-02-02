<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: #fff;
            padding: 2rem;
            width: 320px;
            border-radius: 6px;
            box-shadow: 0 4px 10px rgba(0,0,0,.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 1rem;
        }
        input {
            width: 90%;
            padding: 10px;
            margin-bottom: 1rem;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #2563eb;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .error {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Login</h2>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
