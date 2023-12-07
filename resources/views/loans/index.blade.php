<!-- resources/views/loans/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h3><center>Lista de Préstamos</center></h3>

    <div class="d-flex justify-content-end">
        <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">Crear Préstamo</a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Ejemplar</th>
                <th>Fecha de Préstamo</th>
                <th>Fecha de Devolución</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loans as $loan)
                <tr>
                    <td>{{ $loan->id }}</td>
                    <td>{{ $loan->customer->Nombre }}</td>
                    <td>
                        @if ($loan->ejemplar->book) 
                            {{ $loan->ejemplar->Codigo }} - {{ $loan->ejemplar->book->Titulo }}
                        @else
                            Ejemplar no asociado a un libro
                        @endif
                    </td>
                    <td>{{ $loan->FechaPrestamo }}</td>
                    <td>{{ $loan->FechaDevolucion ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('loans.show', $loan) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('loans.edit', $loan) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('loans.destroy', $loan) }}" method="POST" style="display:inline">
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