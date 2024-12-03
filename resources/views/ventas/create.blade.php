@extends('layouts.app')

@section('title', 'Registrar Nueva Venta')

@section('content')
<div>
    <h1>Registrar Nueva Venta</h1>
    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="producto_id" class="form-label">Producto</label>
            <input type="text" class="form-control" name="Producto" min="1" required>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" min="1" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" class="form-control" name="total" step="0.01" required>
        </div>
        <button class="btn btn-success" type="submit">Registrar Venta</button>
    </form>
</div>
@endsection
