<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = ['ncompra', 'subtotal', 'descuento', 'iva', 'total', 'tiempo_id', 'empleado_id', 'proveedor_id'];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }

    public function detallesCompras()
    {
        return $this->hasMany(DetalleCompra::class, 'compra_id');
    }

    public function up()
{
    Schema::create('compras', function (Blueprint $table) {
        $table->id();
        $table->integer('ncompra');
        $table->decimal('subtotal', 10, 2);
        $table->decimal('descuento', 10, 2);
        $table->decimal('iva', 10, 2);
        $table->decimal('total', 10, 2);
        $table->foreignId('tiempo_id')->constrained('tiempos');
        $table->foreignId('empleado_id')->constrained('empleados');
        $table->foreignId('proveedor_id')->constrained('proveedores');
        $table->timestamps();
    });
}

}

