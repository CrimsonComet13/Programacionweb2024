<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
    protected $fillable = ['venta_id', 'producto_id', 'cantidad', 'subtotal'];

    // Relación: Un detalle pertenece a una venta
    public function venta()
    {
        return $this->belongsTo(Ventas::class);
    }

    // Relación: Un detalle pertenece a un producto
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
