@extends('layouts.app')

@section('content')
    <h3><center>Detalles del Préstamo</center></h3>

    <div>
        <strong>ID:</strong> {{ $loan->id }}
    </div>
    <div>
        <strong>Usuario:</strong> {{ $loan->customer->Nombre }}
    </div>
    <div>
        <strong>Ejemplar:</strong>
        {{ $loan->ejemplar->book ? $loan->ejemplar->Codigo . ' - ' . $loan->ejemplar->book->Titulo : 'Ejemplar no asociado a un libro' }}
    </div>
    <div>
        <strong>Fecha de Préstamo:</strong> {{ $loan->FechaPrestamo }}
    </div>
    <div>
        <strong>Fecha de Devolución:</strong> {{ $loan->FechaDevolucion ?? 'N/A' }}
    </div>

    <a href="{{ route('loans.index') }}" class="btn btn-secondary">Volver</a>

@endsection
