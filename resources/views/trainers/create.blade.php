@extends('layout.app')
@section('title','create')

@section('section')
    <div class="container">
        <div class="row">
            <form action="/trainers" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="txtNombre">Nombre: </label>
                    <input class="form-control" name="txtNombre" type="text">
                </div>
                <div class="form-group">
                    <label for="txtSlug">NickName: </label>
                    <input class="form-control" name="txtSlug" type="text">
                </div>
                <div class="form-group">
                    <label for="imgAvatar">Avatar</label>
                    <input type="file" name="imgAvatar" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                </div>
            </form>
        </div>
        @include('common.errors')
    </div>

@endsection