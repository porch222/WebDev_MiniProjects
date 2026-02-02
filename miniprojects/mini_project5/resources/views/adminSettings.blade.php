<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Settings</title>
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            padding: 2rem;
        }

        h1 {
            color: #90caf9;
            text-align: center;
            margin-bottom: 2rem;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1e1e1e;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        label {
            display: block;
            margin-top: 1rem;
            margin-bottom: 0.3rem;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 0.5rem;
            border: none;
            border-radius: 5px;
            background-color: #2c2c2c;
            color: #e0e0e0;
        }

        input[type="checkbox"] {
            margin-right: 0.5rem;
        }

        button {
            margin-top: 1.5rem;
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 5px;
            background-color: #bb86fc;
            color: #121212;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #9a4dff;
        }

        .section {
            margin-bottom: 2rem;
            border-bottom: 1px solid #333;
            padding-bottom: 1rem;
        }
    </style>
</head>
<body>
    <h1>Admin Settings</h1>
    <div class="container">
        <form action="#" method="POST">
            <div class="section">
                <h2>General</h2>
                <label for="site_name">Site Name</label>
                <input type="text" id="site_name" name="site_name" value="My Laravel App">

                <label for="site_email">Admin Email</label>
                <input type="email" id="site_email" name="site_email" value="admin@example.com">
            </div>

            <div class="section">
                <h2>Security</h2>
                <label>
                    <input type="checkbox" name="enable_2fa" checked>
                    Enable Two-Factor Authentication
                </label>

                <label for="password_policy">Password Policy</label>
                <select id="password_policy" name="password_policy">
                    <option value="weak">Weak</option>
                    <option value="medium" selected>Medium</option>
                    <option value="strong">Strong</option>
                </select>
            </div>

            <div class="section">
                <h2>Appearance</h2>
                <label>
                    <input type="checkbox" name="dark_mode" checked>
                    Dark Mode
                </label>
            </div>

            <button type="submit">Save Settings</button>
        </form>
    </div>
</body>
</html>
