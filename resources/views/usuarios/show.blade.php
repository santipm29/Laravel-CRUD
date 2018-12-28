@extends('layout')
@section('title','usuarios')
@section('content')
<div class="container">
<h2>Id usuario {{$usuarios->id}}</h2>
<div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">Usuario {{$usuarios->name}}</h5>
      <p class="card-text">Correo {{$usuarios->email}}</p>
    </div>
  </div>
  <div>
    <p>
      <a href="{{route('usuarios')}}">Regresar</a>
      </p>
  </div>
</div>
@endsection
