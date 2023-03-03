@extends('layout')

@section('title','Home')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo Web</h1>
            <p class="lead text-secondary">
                proceso de creación y mantenimiento de sitios web.
            </p>
            <a class="btn btn-lg col-12 btn-primary mb-1 text-btn-color" href="{{route('contact')}}">Contactame</a>
            <a class="btn btn-lg col-12 btn-outline-primary" href="{{route('projects.index')}}">Portafolio</a>
        </div>

        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="{{asset('/img/home.svg')}}" alt="desarrollo Web">
        </div>
    </div>
</div>
@endsection
    

