@extends('layout.app')

@section('title','Trainers')

@section('section')
    <div class="row">
        @include('common.sucess')
    </div>
    <div class="row">
    @foreach ($trainers as $trainer)
        <div class="col-sm profiles">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top avatar" src="/img/{{$trainer->avatar}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$trainer->nombre}}</h5>
                    <h6 class="card-title">{{$trainer->slug}}</h6>
                    <p class="card-text">Descripcion1</p>
                    <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver Perfil</a>   
                    <form action="/trainers/{{$trainer->slug}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</a>
                    </form> 
                </div>    
            </div>
        </div>
    @endforeach
    </div>       

@endsection