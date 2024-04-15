@extends('layouts.principal')

@section('hijos')

<h1>Notas Español</h1>

<a href="espanol/create" class="btn btn-primary">Crear un Nuevo Registro</a>

<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($espanols as $espanol)
            <tr>
                <th>{{$espanol->id}}</th>
                <th>{{$espanol->nombre}}</th>
                <th>{{$espanol->apellido}}</th>
                <th>{{$espanol->nota1}}</th>
                <th>{{$espanol->nota2}}</th>
                <th>{{$espanol->nota3}}</th>
                <th>
                    <a href="/espanol/{{$espanol->id}}/edit" class="btn btn-info">Editar</a>

                    <a href="/espanol/{{$espanol->id}}" class="btn btn-warning">Eliminar</a>
                </th>
            </tr>
            @endforeach
        </tbody>
        
</table>

@endsection 