<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = ['nventa', 'subtotal', 'descuento', 'iva', 'total', 'tiempo_id', 'empleado_id', 'cliente_id'];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function detallesVentas()
    {
        return $this->hasMany(DetalleVenta::class, 'venta_id');

    }

    public function up()
{
    Schema::create('ventas', function (Blueprint $table) {
        $table->id();
        $table->integer('nventa');
        $table->decimal('subtotal', 10, 2);
        $table->decimal('descuento', 10, 2);
        $table->decimal('iva', 10, 2);
        $table->decimal('total', 10, 2);
        $table->foreignId('tiempo_id')->constrained('tiempos');
        $table->foreignId('empleado_id')->constrained('empleados');
        $table->foreignId('cliente_id')->constrained('clientes');
        $table->timestamps();
    });
}



}
