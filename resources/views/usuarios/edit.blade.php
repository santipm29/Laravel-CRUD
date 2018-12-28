@extends('layout')
@section('title','Editar usuario')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card ">
            <h4 class="card-header">Editar usuario</h4>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ url("usuarios/{$user->id}") }}">
                    {{ method_field('PUT') }}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{old('name', $user->name)}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electronico</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{old('email', $user->email)}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Contrasena</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-info" type="submit">Actualizar</button>
            </div>

            </form>

        </div>
    </div>
    
</div>
@endsection
