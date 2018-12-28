@extends('layout')
@section('title','usuarios_lista')
@section('content')

<div class="d-flex justify-content-between align-items-end mb-2">
    <h1 class="pb-1">{{$titulo}}</h1>
    <p> <a href="{{url('/usuarios/nuevo')}}" class="btn btn-primary">Crear usuario</a>
    </p>
</div>

@if($usuarios->isNotEmpty())
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{$usuario->name}}</td>
            <td>{{ $usuario->email }}</td>
            <td>
                <form method="POST" action="{{route('usuarios.eliminar', $usuario)}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{route('usuarios.detalle', $usuario)}}" class="btn btn-link" title="Ver más"><i class="fas fa-eye"></i></a>
                    <a href="{{route('usuarios.editar', $usuario)}}" class="btn btn-link" title="Editar"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-link" id="btn_eliminar" title="Eliminar"><i class="fas fa-trash-alt" ></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@else
<p>No hay usuarios registrados</p>
@endif


@endsection
