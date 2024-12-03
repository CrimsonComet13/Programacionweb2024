@extends('layouts.app')

@section('title', 'Detalle de Venta')

@section('content')
<div>
    <h1>Detalle de Venta</h1>
    <p><strong>ID Venta:</strong> {{ $venta->id }}</p>
    <p><strong>Total:</strong> {{ $venta->total }}</p>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($venta->detalleVentas as $detalle)
            <tr>
                <td>{{ $detalle->producto->nombre }}</td>
                <td>{{ $detalle->cantidad }}</td>
                <td>{{ $detalle->subtotal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
