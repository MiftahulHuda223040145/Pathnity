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
    <div class="relative min-h-screen bg-cover bg-center" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvDOm9BG2gkROZMA8_517YalVhJUCtoEJCrA&s');">
    
    <main class="py-12 flex items-center justify-center">
        @yield('content')
    </main>
    <x-footer></x-footer>
</body>
</html>