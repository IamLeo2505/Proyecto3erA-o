<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_categoria'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_id');
    }
    public function up()
{
    Schema::create('categorias', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_categoria', 45);
        $table->timestamps();
    });
}

}

