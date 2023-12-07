@extends('layouts.app')

@section('content')
    <h3><center>Detalles de Ejemplar</center></h3>

    <div>
        <strong>Código:</strong> {{ $ejemplar->Codigo }}
    </div>
    <div>
        <strong>Localización:</strong> {{ $ejemplar->Localizacion }}
    </div>
    <div>
        <strong>Libro Asociado:</strong> {{ $ejemplar->book->Titulo ?? 'Sin libro asociado' }}
    </div>
    
    <a href="{{ route('ejemplars.index') }}" class="btn btn-secondary">Volver</a>

@endsection
