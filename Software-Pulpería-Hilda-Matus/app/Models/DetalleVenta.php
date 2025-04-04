<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $fillable = ['cantidad', 'precio', 'iva', 'descuento', 'subtotal', 'total', 'venta_id', 'producto_id'];

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'venta_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function up()
{
    Schema::create('detalle_ventas', function (Blueprint $table) {
        $table->id();
        $table->integer('cantidad');
        $table->decimal('precio', 10, 2);
        $table->decimal('iva', 10, 2);
        $table->decimal('descuento', 10, 2);
        $table->decimal('subtotal', 10, 2);
        $table->decimal('total', 10, 2);
        $table->foreignId('venta_id')->constrained('ventas');
        $table->foreignId('producto_id')->constrained('productos');
        $table->timestamps();
    });
}

}

