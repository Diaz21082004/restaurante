@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Menú</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $menu->nombre }}" required>
        </div>
        
        <div class="form-group">
            <label for="precio">Precio (€)</label>
            <input type="text" name="precio" class="form-control" value="{{ $menu->precio }}" required>
        </div>
        
        <div class="form-group">
            <label for="ingredientes">Ingredientes</label>
            <textarea name="ingredientes" class="form-control" required>{{ $menu->ingredientes }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
