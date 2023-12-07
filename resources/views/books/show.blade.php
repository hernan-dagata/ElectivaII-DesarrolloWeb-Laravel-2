@extends('layouts.app')

@section('content')
    <h3><center>Detalles del Libro<center></h3>

    <div>
        <strong>Código:</strong> {{ $book->Codigo }}
    </div>
    <div>
        <strong>Título:</strong> {{ $book->Titulo }}
    </div>
    <div>
        <strong>ISBN:</strong> {{ $book->ISBN }}
    </div>
    <div>
        <strong>Páginas:</strong> {{ $book->Paginas }}
    </div>
    <div>
        <strong>Autor:</strong> {{ $book->author ? $book->author->Nombre : 'Sin autor' }}
    </div>
    <div>
        <strong>Editorial:</strong> {{ $book->editorial ? $book->editorial->Nombre : 'Sin editorial' }}
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-2">Volver</a>
@endsection
