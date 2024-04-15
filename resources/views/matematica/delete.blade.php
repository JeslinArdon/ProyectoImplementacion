@extends('layouts.principal')

@section('hijos')
<h1>Eliminar Empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/matematica/{{$eliminarRegistro->id}}" method="POST">
    @csrf
    @method('Delete')

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$eliminarRegistro->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$eliminarRegistro->apellido}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota 1</label>
    <input type="text" name="nota1" id="nota1" value="{{$eliminarRegistro->nota1}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota 2 </label>
    <input type="text" name="nota2" id="nota2" value="{{$eliminarRegistro->nota2}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota 3 </label>
    <input type="text" name="nota3" id="nota3" value="{{$eliminarRegistro->nota3}}" class="form-control">
    </div>

    <button type="submit">Eliminar</button>
</form>

</div>
</div>
</div>
@endsection
