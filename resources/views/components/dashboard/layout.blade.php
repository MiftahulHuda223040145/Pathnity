<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathnity</title>
    @vite('resources/css/app.css', 'resources/js/app.js') 
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="bg-[#F7F7F7]">
    <x-dashboard.sidebar></x-dashboard.sidebar>
    <main>
        {{$slot}}
    </main>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>