<?php

namespace App\Http\Controllers;

use App\Models\DetalleVentas;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'venta_id' => 'required|exists:ventas,id',
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'subtotal' => 'required|numeric|min:0',
        ]);

        DetalleVentas::create($request->all());
        return back()->with('success', 'Detalle agregado correctamente.');
    }

    public function destroy(DetalleVentas $detalleVenta)
    {
        $detalleVenta->delete();
        return back()->with('success', 'Detalle eliminado correctamente.');
    }
}
