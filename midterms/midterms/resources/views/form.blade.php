<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <h1>Student Form</h1>

    <form action="/form" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>