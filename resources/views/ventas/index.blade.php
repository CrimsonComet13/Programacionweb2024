@extends('layouts.app')

@section('title', 'Lista de Ventas')

@section('content')
<div>
    <h1>Lista de Ventas</h1>
    <a class="btn btn-primary" href="{{ route('ventas.create') }}">Registrar Nueva Venta</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Total</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->id }}</td>
                <td>${{ number_format($venta->total, 2) }}</td>
                <td>{{ $venta->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('ventas.show', $venta) }}">Ver Detalle</a>
                    <form action="{{ route('ventas.destroy', $venta) }}" method="POST" style="display:inline;">
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
