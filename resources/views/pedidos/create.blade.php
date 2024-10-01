@extends('layouts.app')

@section('title', 'Crear Pedido')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Nuevo Pedido</h1>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="usuario_id">Usuario ID:</label>
            <input type="number" name="usuario_id" id="usuario_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="menu_id">Menu ID:</label>
            <input type="number" name="menu_id" id="menu_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total">Total (€):</label>
            <input type="text" name="total" id="total" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Pedido</button>
    </form>
</div>
@endsection
