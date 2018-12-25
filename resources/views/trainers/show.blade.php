@extends('layout.app')
@section('title','Show Trainer')
   
@section('section')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img class="card-img-top avatar" src="/img/{{$trainer->avatar}}" alt="Card image cap">
      <p class="lead font-weight-normal">{{$trainer->nombre}}</p>
      <p class="lead font-weight-normal">{{$trainer->slug}}</p>
      <a class="btn btn-outline-secondary" href="/trainers/{{$trainer->slug}}/edit">Editar</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
@endsection
