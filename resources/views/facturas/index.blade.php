@extends('layouts.app')

@section('title', 'Listado de Facturas')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Listado de Facturas</h1>
    <a href="{{ route('facturas.create') }}" class="btn btn-primary mb-3">Crear nueva factura</a>

    @if ($facturas->count())
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Total (€)</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facturas as $factura)
                    <tr>
                        <td>Factura #{{ $factura->id }}</td>
                        <td>{{ $factura->total }}</td>
                        <td>
                            <a href="{{ route('facturas.show', $factura->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('facturas.edit', $factura->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('facturas.destroy', $factura->id) }}" method="POST" style="display: inline;">
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
            No hay facturas disponibles.
        </div>
    @endif
</div>
@endsection
