<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathnity</title>
    @vite('resources/css/app.css', 'resources/js/app.js') 
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="h-screen flex flex-col m-0 p-0">
    <x-navbar></x-navbar>
    <main class="bg-[#F7F7F7] flex-grow pb-0 mb-0">
        {{$slot}}
    </main>
    <x-footer></x-footer>

    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/profile-picture.js') }}"></script>
    <script src="{{ asset('js/upload-modal.js') }}" defer></script>
    <script src="{{ asset('js/toggle-password.js') }}"></script>
    <script src="{{ asset('js/edit-form.js') }}"></script>

    

</body>
</html>