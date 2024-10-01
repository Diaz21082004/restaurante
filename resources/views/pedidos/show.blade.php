@extends('layouts.app')

@section('title', 'Detalle del Pedido')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Detalles del Pedido #{{ $pedido->id }}</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información del Pedido</h5>
            <p class="card-text"><strong>Usuario ID:</strong> {{ $pedido->usuario_id }}</p>
            <p class="card-text"><strong>Menu ID:</strong> {{ $pedido->menu_id }}</p>
            <p class="card-text"><strong>Cantidad:</strong> {{ $pedido->cantidad }}</p>
            <p class="card-text"><strong>Total:</strong> {{ $pedido->total }} €</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning">Editar</a>

        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

    <br>
    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Volver a la lista de pedidos</a>
</div>
@endsection
