<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiempo extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'año', 'mes', 'dia', 'dia_semana', 'trimestre', 'horario'];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'tiempo_id');
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'tiempo_id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'tiempo_id');
    }

    
}

