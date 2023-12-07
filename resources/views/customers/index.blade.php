@extends('layouts.app')

@section('content')
    <h3><center>Lista de Usuarios</center></h3>

    <div class="d-flex justify-content-end">
        <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->Codigo }}</td>
                    <td>{{ $customer->Nombre }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline">
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
