<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'categoria_id'];
    public function categoria()
    {
        return $this->belongsTo(Categorias::class);
    }
    
    // Relación: Un producto puede estar en muchos detalles de venta
    public function detalles()
    {
        return $this->hasMany(DetalleVentas::class);
    }
}
