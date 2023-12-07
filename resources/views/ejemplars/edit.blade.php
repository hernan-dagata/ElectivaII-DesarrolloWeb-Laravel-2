@extends('layouts.app')

@section('content')
    <h3><center>Editar Ejemplar</center></h3>

    <form action="{{ route('ejemplars.update', $ejemplar) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Codigo">Código:</label>
            <input type="text" class="form-control" id="Codigo" name="Codigo" value="{{ $ejemplar->Codigo }}" required>
        </div>
        <div class="form-group">
            <label for="Localizacion">Localización:</label>
            <input type="text" class="form-control" id="Localizacion" name="Localizacion" value="{{ $ejemplar->Localizacion }}" required>
        </div>
        <div class="form-group">
            <label for="book_id">Libro Asociado:</label>
            <select class="form-control" id="book_id" name="book_id" required>
                @foreach($books as $book)
                    <option value="{{ $book->id }}" {{ $ejemplar->book_id == $book->id ? 'selected' : '' }}>{{ $book->Titulo }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection