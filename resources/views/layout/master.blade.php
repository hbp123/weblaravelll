<!DOCTYPE html>
<html>
<head>
    <title>
    @yield('title')
    </title>
</head>

<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/blogsite">Blog</a>
        </nav>
    </header>
    <br>

    @yield('content')

    <br>
    <footer>
        <p>
            &copy; laravel & test 2016
        </p>
    </footer>
</body>
</html>
