@extends('layouts.app')

@section('title', 'Editar Factura')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Factura #{{ $factura->id }}</h1>

    <form action="{{ route('facturas.update', $factura->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="pedido_id">Pedido ID:</label>
            <input type="number" name="pedido_id" id="pedido_id" class="form-control" value="{{ $factura->pedido_id }}" required>
        </div>
        
        <div class="form-group">
            <label for="total">Total (€):</label>
            <input type="text" name="total" id="total" class="form-control" value="{{ $factura->total }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar Factura</button>
    </form>
</div>
@endsection
