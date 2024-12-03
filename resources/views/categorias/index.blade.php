@extends('layouts.app')

@section('title', 'Lista de Categorías')

@section('content')
<div>
    <h1>Lista de Categorías</h1>
    <a class="btn btn-primary" href="{{ route('categorias.create') }}">Agregar Categoría</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nombre }}</td>
                <td>
                    <a class="btn btn-warning btn-sm" href="{{ route('categorias.edit', $categoria) }}">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
