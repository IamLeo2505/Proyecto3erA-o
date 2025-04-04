<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;

    protected $fillable = ['cantidad', 'precio', 'iva', 'descuento', 'subtotal', 'total', 'compra_id', 'producto_id'];

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'compra_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function up()
{
    Schema::create('detalle_compras', function (Blueprint $table) {
        $table->id();
        $table->integer('cantidad');
        $table->decimal('precio', 10, 2);
        $table->decimal('iva', 10, 2);
        $table->decimal('descuento', 10, 2);
        $table->decimal('subtotal', 10, 2);
        $table->decimal('total', 10, 2);
        $table->foreignId('compra_id')->constrained('compras');
        $table->foreignId('producto_id')->constrained('productos');
        $table->timestamps();
    });
}

}

