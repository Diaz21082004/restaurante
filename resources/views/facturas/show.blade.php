@extends('layouts.app')

@section('title', 'Detalle de la Factura')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Detalles de la Factura #{{ $factura->id }}</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información de la Factura</h5>
            <p class="card-text"><strong>Pedido ID:</strong> {{ $factura->pedido_id }}</p>
            <p class="card-text"><strong>Total:</strong> {{ $factura->total }} €</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('facturas.edit', $factura->id) }}" class="btn btn-warning">Editar</a>

        <form action="{{ route('facturas.destroy', $factura->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

    <br>
    <a href="{{ route('facturas.index') }}" class="btn btn-secondary">Volver a la lista de facturas</a>
</div>
@endsection
