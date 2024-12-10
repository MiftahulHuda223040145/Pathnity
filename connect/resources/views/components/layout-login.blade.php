<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathnity</title>
    @vite('resources/css/app.css') 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class=" h-screen flex flex-col">
    <x-navbar></x-navbar>

    
    <main class="py-12 flex items-center justify-center">
        @yield('content')
    </main>
    <x-footer></x-footer>
</body>
</html>