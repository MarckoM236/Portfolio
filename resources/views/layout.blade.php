<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','project')</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
        .h-screen{
            height: 100vh;
        }
        .text-btn-color{
            color:#ffff;
        }

        .text-btn-color:hover{
            color:#ffff;
        }

    </style>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials/navigation')
    
            {{--Mensajes de estado--}}
            @include('partials/status')
        </header>

        <main class="py-4">
            @yield('content')
        </main>
        
        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{config('app.name')}} | Copyright @ {{date('Y')}}
        </footer>
        
    </div>
    
</body>
</html>