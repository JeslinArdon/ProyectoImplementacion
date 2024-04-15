@extends('layouts.principal')

@section('hijos')
<h1>Editar Empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/espanol/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$editarRegistro->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$editarRegistro->apellido}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota 1</label>
    <input type="text" name="nota1" id="nota1" value="{{$editarRegistro->nota1}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota 2</label>
    <input type="text" name="nota2" id="nota2" value="{{$editarRegistro->nota2}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota 3</label>
    <input type="text" name="nota3" id="nota3" value="{{$editarRegistro->nota3}}" class="form-control">
    </div>

    <button type="submit">Guardar</button>
</form>

</div>
</div>
</div>
@endsection