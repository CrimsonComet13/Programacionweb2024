@extends('layouts.app')

@section('title', 'Agregar Categoría')

@section('content')
<div>
    <h1>Agregar Categoría</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
    </form>
</div>
@endsection
