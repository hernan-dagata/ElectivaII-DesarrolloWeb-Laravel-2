@extends('layouts.app')

@section('content')
    <h3><center>Lista de Editoriales</center></h3>
    
    <div class="d-flex justify-content-end">
        <a href="{{ route('editorials.create') }}" class="btn btn-primary">Crear Editorial</a>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($editorials as $editorial)
                <tr>
                    <td>{{ $editorial->Nombre }}</td>
                    <td>
                        <a href="{{ route('editorials.show', $editorial) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('editorials.edit', $editorial) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('editorials.destroy', $editorial) }}" method="POST" style="display:inline">
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