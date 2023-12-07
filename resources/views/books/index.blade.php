@extends('layouts.app')

@section('content')
    <h3><center>Lista de Libros</center></h3>

    <div class="d-flex justify-content-end">
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Crear Libro</a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->Codigo }}</td>
                    <td>{{ $book->Titulo }}</td>
                    <td>{{ $book->author->Nombre ?? 'Sin autor' }}</td>
                    <td>{{ $book->editorial->Nombre ?? 'Sin editorial' }}</td>
                    <td>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection