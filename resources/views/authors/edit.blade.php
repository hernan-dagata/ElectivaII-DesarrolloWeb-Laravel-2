@extends('layouts.app')

@section('content')
    <h3><center>Editar Autor</center></h3>

    <form action="{{ route('authors.update', $author) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="Cedula" class="form-label">Cédula</label>
            <input type="text" class="form-control" id="Cedula" name="Cedula" value="{{ $author->Cedula }}" required>
        </div>
        
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $author->Nombre }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
    
    <a href="{{ route('authors.index') }}" class="btn btn-secondary mt-2">Volver</a>
@endsection
