<div class="form-group">
    <label for="title">Titulo del projecto</label>
    <input class="form-control bg-light shadow-sm @error('name')is-invalid @else border-0 @enderror" type="text" name="title" value="{{old('title',$project->title)}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="url">Url del projecto </label>
    <input class="form-control bg-light shadow-sm @error('name')is-invalid @else border-0 @enderror" type="text" name="url" value="{{old('url',$project->url)}}">
    @error('url')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>


<div class="form-group">
    <label>Descripcion del projecto</label>
    <textarea class="form-control bg-light shadow-sm @error('name')is-invalid @else border-0 @enderror" name="description" id="" cols="30" rows="10">{{old('description',$project->description)}}</textarea>
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>


<button class="btn btn-primary col-12 text-btn-color">{{$btn_text}}</button>
<a class="btn btn-link col-12" href="{{route('projects.index')}}">Regresar</a>