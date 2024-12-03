@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Dashboard</h1>
    <div class="row justify-content-center">
        <!-- Enlace a Productos -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam display-1 text-primary"></i>
                    <h4 class="card-title mt-3">Productos</h4>
                    <p class="card-text">Gestiona los productos de tu tienda fácilmente.</p>
                    <a href="{{ route('productos.index') }}" class="btn btn-primary btn-lg">Ir a Productos</a>
                </div>
            </div>
        </div>
        <!-- Enlace a Categorías -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-tags-fill display-1 text-success"></i>
                    <h4 class="card-title mt-3">Categorías</h4>
                    <p class="card-text">Organiza las categorías para tus productos.</p>
                    <a href="{{ route('categorias.index') }}" class="btn btn-success btn-lg">Ir a Categorías</a>
                </div>
            </div>
        </div>
        <!-- Enlace a Ventas -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-cash-coin display-1 text-danger"></i>
                    <h4 class="card-title mt-3">Ventas</h4>
                    <p class="card-text">Consulta y gestiona tus ventas.</p>
                    <a href="{{ route('ventas.index') }}" class="btn btn-danger btn-lg">Ir a Ventas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
