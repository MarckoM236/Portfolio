@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">  
                <form class="bg-white shaadow rounded py-3 px-4" action="{{route('projects.store')}}" method="POST">
                    @csrf

                    <h1 class="display-4">@lang('New project')</h1>
                    <hr>
                    @include('projects._form',['btn_text'=>'Guardar'])

                </form>
            </div>
        </div>
    </div>  
@endsection