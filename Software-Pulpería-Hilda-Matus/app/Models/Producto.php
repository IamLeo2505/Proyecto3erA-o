<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'codigo_barras', 'stock', 'marca', 'unidad_medida_id', 'categoria_id', 'proveedor_id', 'tiempo_id', 'precio_producto_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }

    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class, 'unidad_medida_id');
    }

    public function precioProducto()
    {
        return $this->belongsTo(PrecioProducto::class, 'precio_producto_id');
    }

    public function up()
{
    Schema::create('productos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 45);
        $table->string('descripcion', 255);
        $table->string('codigo_barras', 45);
        $table->integer('stock');
        $table->string('marca', 45);
        $table->foreignId('unidad_medida_id')->constrained('unidad_medidas');
        $table->foreignId('categoria_id')->constrained('categorias');
        $table->foreignId('proveedor_id')->constrained('proveedores');
        $table->foreignId('precio_producto_id')->constrained('precio_productos');
        $table->timestamps();
    });
}

}

