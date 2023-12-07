@extends('layouts.app')

@section('content')
    <h3><center>Detalles del Usuario</center></h3>

    <div>
        <strong>Código:</strong> {{ $customer->Codigo }}
    </div>
    <div>
        <strong>Nombre:</strong> {{ $customer->Nombre }}
    </div>
    <div>
        <strong>Teléfono:</strong> {{ $customer->Telefono }}
    </div>
    <div>
        <strong>Dirección:</strong> {{ $customer->Direccion }}
    </div>

    <a href="{{ route('customers.index') }}" class="btn btn-secondary mt-2">Volver</a>
@endsection