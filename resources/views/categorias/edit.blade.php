@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('content')
<div>
    <h1>Editar Categoría</h1>
    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ $categoria->nombre }}" required>
        </div>
        <button class="btn btn-success" type="submit">Actualizar</button>
    </form>
</div>
@endsection
