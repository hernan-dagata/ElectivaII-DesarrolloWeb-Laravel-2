@extends('layouts.app')

@section('content')
    <h3><center>Editar Préstamo</center></h3>

    <form action="{{ route('loans.update', $loan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="customer_id">Usuario:</label>
            <select class="form-control" id="customer_id" name="customer_id" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $loan->customer_id == $customer->id ? 'selected' : '' }}>
                        {{ $customer->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="ejemplar_id">Ejemplar:</label>
            <select class="form-control" id="ejemplar_id" name="ejemplar_id" required>
                @foreach($ejemplars as $ejemplar)
                    <option value="{{ $ejemplar->id }}" 
                        {{ $loan->ejemplar_id == $ejemplar->id ? 'selected' : '' }}>
                        {{ $ejemplar->book ? $ejemplar->Codigo . ' - ' . $ejemplar->book->Titulo : 'Ejemplar no asociado a un libro' }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="FechaPrestamo">Fecha de Préstamo:</label>
            <input type="date" class="form-control" id="FechaPrestamo" name="FechaPrestamo" value="{{ $loan->FechaPrestamo }}" required>
        </div>
        <div class="form-group">
            <label for="FechaDevolucion">Fecha de Devolución:</label>
            <input type="date" class="form-control" id="FechaDevolucion" name="FechaDevolucion" value="{{ $loan->FechaDevolucion }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
