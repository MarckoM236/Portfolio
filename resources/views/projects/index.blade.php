@extends('layout')

@section('title','Portfolio')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-4 mb-0">@lang('Portfolio')</h1>
        @auth
            <a class="btn btn-primary text-btn-color" href="{{route('projects.create')}}">Crear Projecto</a>
        @endauth
    </div>
    
    <p class="lead text-secondary">Proyectos realizados</p>
    
    <ul class="list-group">
        @foreach ($datos as $items)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a href="{{route('projects.show',$items)}}"
                class="d-flex justify-content-between align-item-center">
                    <span class="text-secondary font-weight-bold">{{$items->title}}</span>
                    <span class="text-black-50">{{$items->created_at->format('d/m/Y')}}</span>
                </a>
            </li>
        @endforeach
        {{$datos->links()}}
        
    </ul>
</div>
    
    
@endsection