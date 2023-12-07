@extends('layouts.app')

@section('content')
    <h3><center>Crear Libro</center></h3>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="Codigo" required>
        </div>

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="Titulo" required>
        </div>

        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="ISBN" required>
        </div>

        <div class="form-group">
            <label for="paginas">Páginas</label>
            <input type="number" class="form-control" id="paginas" name="Paginas" required>
        </div>

        <div class="form-group">
            <label for="author">Autor</label>
            <select class="form-control" id="author" name="author_id" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}"> {{ $author->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="editorial">Editorial</label>
            <select class="form-control" id="editorial" name="editorial_id" required>
                @foreach($editorials as $editorial)
                    <option value="{{ $editorial->id }}"> {{ $editorial->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
