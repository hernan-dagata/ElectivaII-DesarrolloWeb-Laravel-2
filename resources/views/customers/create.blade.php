@extends('layouts.app')

@section('content')
    <h3><center>Crear Usuario</center></h3>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Codigo">Código:</label>
            <input type="text" class="form-control" id="Codigo" name="Codigo" required>
        </div>
        <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
        </div>
        <div class="form-group">
            <label for="Telefono">Teléfono:</label>
            <input type="text" class="form-control" id="Telefono" name="Telefono" required>
        </div>
        <div class="form-group">
            <label for="Direccion">Dirección:</label>
            <input type="text" class="form-control" id="Direccion" name="Direccion" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
