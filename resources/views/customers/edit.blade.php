@extends('layouts.app')

@section('content')
<h3><center>Editar Usuario</center></h3>

    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Codigo">Código:</label>
            <input type="text" class="form-control" id="Codigo" name="Codigo" value="{{ $customer->Codigo }}" required>
        </div>
        <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $customer->Nombre }}" required>
        </div>
        <div class="form-group">
            <label for="Telefono">Teléfono:</label>
            <input type="text" class="form-control" id="Telefono" name="Telefono" value="{{ $customer->Telefono }}" required>
        </div>
        <div class="form-group">
            <label for="Direccion">Dirección:</label>
            <input type="text" class="form-control" id="Direccion" name="Direccion" value="{{ $customer->Direccion }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
