@extends('layout')

@section('title','Contact')

@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form class="bg-white shaadow rounded py-3 px-4" action="{{route('message')}}" method="POST">
                    @csrf
                    <h1 class="display-4">@lang('Contact')</h1>
                    <hr>

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm @error('name')is-invalid @else border-0 @enderror" type="text" name="name" placeholder="Nombre" value="{{old('name')}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input class="form-control bg-light shadow-sm @error('name')is-invalid @else border-0 @enderror" email="text" name="email" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input class="form-control bg-light shadow-sm @error('name')is-invalid @else border-0 @enderror" type="subject" name="subject" placeholder="Asunto" value="{{old('subject')}}">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="content">Mensaje</label>
                        <textarea class="form-control bg-light shadow-sm @error('name')is-invalid @else border-0 @enderror" name="content" id="" cols="30" rows="5" placeholder="Escribe aqui el contenido de tu mensaje">{{old('content')}}</textarea><br>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary text-btn-color" type="button">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
 <br>   
@endsection