<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Vancavies')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('vancavies.index') }}">Vancavies List</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; {{ date('Y') }}
    </footer>
</body>
</html>
