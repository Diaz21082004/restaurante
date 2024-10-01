@extends('layouts.app')

@section('title', 'Detalles del Menú')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">{{ $menu->nombre }}</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detalles del Menú</h5>
            <p class="card-text"><strong>Precio:</strong> {{ $menu->precio }} €</p>
            <p class="card-text"><strong>Ingredientes:</strong> {{ $menu->ingredientes }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning">Editar</a>

        <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

    <br>
    <a href="{{ route('menus.index') }}" class="btn btn-secondary">Volver al listado</a>
</div>
@endsection
