@extends('layouts.app')

@section('content')
    <div class="container">
        <h3><center>Editar Editorial</center></h3>

        <form action="{{ route('editorials.update', $editorial) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $editorial->Nombre }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>

        <a href="{{ route('editorials.index') }}" class="btn btn-secondary mt-2">Volver</a>
    </div>
@endsection
