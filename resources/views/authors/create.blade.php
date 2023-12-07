@extends('layouts.app')

@section('content')
    <h3><center>Crear Autor</center></h3>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Cedula" class="form-label">Cédula</label>
            <input type="text" class="form-control" id="Cedula" name="Cedula" required>
        </div>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection