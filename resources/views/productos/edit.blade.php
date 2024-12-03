@extends('layouts.app')

@section('content')
<div>
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}" required>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" required>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $producto->stock }}" required>
        <label for="categoria_id">Categoría:</label>
        <select name="categoria_id" required>
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
            @endforeach
        </select>
        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection
