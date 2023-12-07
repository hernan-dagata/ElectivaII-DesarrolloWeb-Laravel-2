@extends('layouts.app')

@section('content')
    <h3><center>Lista de Ejemplares</center></h3>

    <div class="d-flex justify-content-end">
        <a href="{{ route('ejemplars.create') }}" class="btn btn-primary mb-3">Crear Ejemplar</a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Localización</th>
                <th>Libro Asociado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ejemplars as $ejemplar)
                <tr>
                    <td>{{ $ejemplar->Codigo }}</td>
                    <td>{{ $ejemplar->Localizacion }}</td>
                    <td>{{ $ejemplar->book->Titulo ?? 'Sin libro asociado' }}</td>
                    <td>
                        <a href="{{ route('ejemplars.show', $ejemplar) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('ejemplars.edit', $ejemplar) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('ejemplars.destroy', $ejemplar) }}" method="POST" style="display:inline">
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