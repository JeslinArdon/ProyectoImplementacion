@extends('layouts.principal')

@section('hijos')
<h1>Notas Matematicas</h1>

<a href="matematica/create" class="btn btn-primary">Crear un Nuevo Registro</a>

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
            @foreach($matematicas as $matematica)
            <tr>
                <th>{{$matematica->id}}</th>
                <th>{{$matematica->nombre}}</th>
                <th>{{$matematica->apellido}}</th>
                <th>{{$matematica->nota1}}</th>
                <th>{{$matematica->nota2}}</th>
                <th>{{$matematica->nota3}}</th>
                <th>
                    <a href="/matematica/{{$matematica->id}}/edit" class="btn btn-info">Editar</a>

                    <a href="/matematica/{{$matematica->id}}" class="btn btn-warning">Eliminar</a>
                </th>
            </tr>
            @endforeach
        </tbody>
        
</table>

@endsection 
