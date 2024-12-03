<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
        $ventas = Ventas::with('usuario')->get(); // Incluye información del usuario
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $productos = Producto::all(); // Obtener productos para seleccionar en la venta
        return view('ventas.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'total' => 'required|numeric|min:0',
        ]);

        Ventas::create($request->all());
        return redirect()->route('ventas.index')->with('success', 'Venta registrada correctamente.');
    }

    public function show(Ventas $venta)
    {
        $venta->load('detalleVentas.producto'); // Incluye detalles y productos vendidos
        return view('ventas.show', compact('venta'));
    }

    public function destroy(Ventas $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index')->with('success', 'Venta eliminada correctamente.');
    }
}
