@extends('layout.app')
@section('tittle','Editar')
    
@section('section')
    <div class="container">
        <div class="row">
            <form action="/trainers/{{$trainer->slug}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input class="form-control" name="nombre" value="{{$trainer->nombre}}" type="text">
                </div>
                <div class="form-group">
                    <label for="slug">NickName: </label>
                    <input class="form-control" name="slug" value="{{$trainer->slug}}" type="text">
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection