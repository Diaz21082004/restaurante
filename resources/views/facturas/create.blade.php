@extends('layouts.app')

@section('title', 'Crear Factura')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Nueva Factura</h1>

    <form action="{{ route('facturas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pedido_id">Pedido ID:</label>
            <input type="number" name="pedido_id" id="pedido_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total">Total (€):</label>
            <input type="text" name="total" id="total" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Factura</button>
    </form>
</div>
@endsection
