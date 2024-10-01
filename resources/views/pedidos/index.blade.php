@extends('layouts.app')

@section('title', 'Listado de Pedidos')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Listado de Pedidos</h1>
    <a href="{{ route('pedidos.create') }}" class="btn btn-primary mb-3">Crear nuevo pedido</a>

    @if ($pedidos->count())
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Total (€)</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->usuario_id }}</td>
                        <td>{{ $pedido->total }}</td>
                        <td>
                            <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning" role="alert">
            No hay pedidos disponibles.
        </div>
    @endif
</div>
@endsection
