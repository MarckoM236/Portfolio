<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>404</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
        .h-screen{
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-12 text-center">
            <img class="img-fluid mb-4" src="{{asset('/img/404.svg')}}" alt="desarrollo Web">
        </div>
        <a class="btn btn-lg btn-outline-primary col-12 " href="{{route('projects.index')}}">Regresar</a>
        
    </div>
    

</body>
</html>

