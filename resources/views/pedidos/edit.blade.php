@extends('layouts.app')

@section('title', 'Editar Pedido')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Pedido #{{ $pedido->id }}</h1>

    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="usuario_id">Usuario ID:</label>
            <input type="number" name="usuario_id" id="usuario_id" class="form-control" value="{{ $pedido->usuario_id }}" required>
        </div>
        
        <div class="form-group">
            <label for="menu_id">Menu ID:</label>
            <input type="number" name="menu_id" id="menu_id" class="form-control" value="{{ $pedido->menu_id }}" required>
        </div>
        
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $pedido->cantidad }}" required>
        </div>
        
        <div class="form-group">
            <label for="total">Total (€):</label>
            <input type="text" name="total" id="total" class="form-control" value="{{ $pedido->total }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar Pedido</button>
    </form>
</div>
@endsection
