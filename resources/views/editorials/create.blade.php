@extends('layouts.app')

@section('content')
    <h3><center>Crear Editorial</center></h3>

    <form action="{{ route('editorials.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection