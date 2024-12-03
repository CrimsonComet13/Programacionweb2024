<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $fillable = ['usuario_id', 'total'];

    // Relación: Una venta pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    // Relación: Una venta tiene muchos detalles
    public function detalles()
    {
        return $this->hasMany(DetalleVentas::class);
    }
}
