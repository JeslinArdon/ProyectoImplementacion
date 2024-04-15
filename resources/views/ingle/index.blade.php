@extends('layouts.principal')

@section('hijos')

<h1>Notas Ingles</h1>

<a href="ingle/create" class="btn btn-primary">Crear un Nuevo Registro</a>

<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Notas1</th>
                <th>Notas2</th>
                <th>Notas3</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($ingles as $ingle)
            <tr>
                <th>{{$ingle->id}}</th>
                <th>{{$ingle->nombre}}</th>
                <th>{{$ingle->apellido}}</th>
                <th>{{$ingle->nota1}}</th>
                <th>{{$ingle->nota2}}</th>
                <th>{{$ingle->nota3}}</th>
                <th>
                    <a href="/ingle/{{$ingle->id}}/edit" class="btn btn-info">Editar</a>

                    <a href="/ingle/{{$ingle->id}}" class="btn btn-warning">Eliminar</a>
                </th>
            </tr>
            @endforeach
        </tbody>
        
</table>

@endsection 
