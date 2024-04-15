@extends('layouts.principal')

@section('hijos')

<h1>Notas Ciencias Naturales</h1>

<a href="cienciasnaturale/create" class="btn btn-primary">Crear un Nuevo Registro</a>

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
            @foreach($cienciasnaturales as $cienciasnaturale)
            <tr>
                <th>{{$cienciasnaturale->id}}</th>
                <th>{{$cienciasnaturale->nombre}}</th>
                <th>{{$cienciasnaturale->apellido}}</th>
                <th>{{$cienciasnaturale->nota1}}</th>
                <th>{{$cienciasnaturale->nota2}}</th>
                <th>{{$cienciasnaturale->nota3}}</th>
                <th>
                    <a href="/cienciasnaturale/{{$cienciasnaturale->id}}/edit" class="btn btn-info">Editar</a>

                    <a href="/cienciasnaturale/{{$cienciasnaturale->id}}" class="btn btn-warning">Eliminar</a>
                </th>
            </tr>
            @endforeach
        </tbody>
        
</table>

@endsection 
