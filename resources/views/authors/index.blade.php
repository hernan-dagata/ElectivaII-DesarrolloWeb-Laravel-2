@extends('layouts.app')

@section('content')
    <h3><center>Lista de Autores</center></h3>
    
    <div class="d-flex justify-content-end">
        <a href="{{ route('authors.create') }}" class="btn btn-primary">Crear Autor</a>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->Cedula }}</td>
                    <td>{{ $author->Nombre }}</td>
                    <td>
                        <a href="{{ route('authors.show', $author) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('authors.edit', $author) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline">
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