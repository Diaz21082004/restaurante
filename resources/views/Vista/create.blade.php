@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Menú</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio (€)</label>
            <input type="text" name="precio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ingredientes">Ingredientes</label>
            <textarea name="ingredientes" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" name="categoria" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
