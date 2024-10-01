@extends('layouts.app')

@section('title', 'Listado de Menús')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Menús</h1>
    <a href="{{ route('menus.create') }}" class="btn btn-primary mb-3">Crear nuevo menú</a>

    @if ($menus->count())
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio (€)</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->nombre }}</td>
                        <td>{{ $menu->precio }}</td>
                        <td>
                            <a href="{{ route('menus.show', $menu->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display: inline;">
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
            No hay menús disponibles.
        </div>
    @endif
</div>
@endsection
