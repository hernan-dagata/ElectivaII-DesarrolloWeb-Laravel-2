@extends('layouts.app')

@section('content')
    <h3><center>Detalles de la Editorial</center></h3>

    <p>Id: {{ $editorial->id }}</p>
    <p>Nombre: {{ $editorial->Nombre }}</p>

    <a href="{{ route('editorials.index') }}" class="btn btn-secondary">Volver</a>
@endsection