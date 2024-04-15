@extends('layouts.principal')

@section('hijos')

<h1>Notas Ciencias Sociales</h1>

<a href="cienciassociale/create" class="btn btn-primary">Crear un Nuevo Registro</a>

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
            @foreach($cienciassociales as $cienciassociale)
            <tr>
                <th>{{$cienciassociale->id}}</th>
                <th>{{$cienciassociale->nombre}}</th>
                <th>{{$cienciassociale->apellido}}</th>
                <th>{{$cienciassociale->nota1}}</th>
                <th>{{$cienciassociale->nota2}}</th>
                <th>{{$cienciassociale->nota3}}</th>
                <th>
                    <a href="/cienciassociale/{{$cienciassociale->id}}/edit" class="btn btn-info">Editar</a>

                    <a href="/cienciassociale/{{$cienciassociale->id}}" class="btn btn-warning">Eliminar</a>
                </th>
            </tr>
            @endforeach
        </tbody>
        
</table>

@endsection 

