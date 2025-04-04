<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_unidad'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'unidad_medida_id');
    }

    public function up()
{
    Schema::create('unidad_medidas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_unidad', 45);
        $table->timestamps();
    });
}

}
