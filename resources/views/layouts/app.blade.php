<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body class="h-screen" style="background: linear-gradient(45deg, #474242, transparent);">
    <div class="grid grid-cols-1 text-center bg-gray-400 py-5 text-white font-bold text-xl">
        <div class="grid">
            School managment System
        </div>
    </div>
    @yield('content')
    @livewireScripts
    <x-toaster-hub />
</body>
</html>