@extends('layouts.principal')

@section('hijos')
<h1>Crear Registro</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/ingle" method="POST">
    @csrf
    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota 1</label>
    <input type="text" name="nota1" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota 2</label>
    <input type="text" name="nota2" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota 3</label>
    <input type="text" name="nota3" class="form-control">
    </div>

    <button type="submit">Guardar</button>
</form>

</div>
</div>
</div>
@endsection