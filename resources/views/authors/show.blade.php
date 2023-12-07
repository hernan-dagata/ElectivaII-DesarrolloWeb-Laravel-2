@extends('layouts.app')

@section('content')
    <h3><center>Detalles del Autor</center></h3>

    <p>Id: {{ $author->id }}</p>
    <p>Cédula: {{ $author->Cedula }}</p>
    <p>Nombre: {{ $author->Nombre }}</p>

    <a href="{{ route('authors.index') }}" class="btn btn-secondary">Volver</a>
@endsection