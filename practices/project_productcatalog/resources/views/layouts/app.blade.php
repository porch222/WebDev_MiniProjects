<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <h1>My Store</h1>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>© {{ date('Y') }} My Store</p>
    </footer>

</body>
</html>