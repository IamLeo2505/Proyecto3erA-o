<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'numero', 'edad', 'genero', 'estado'];

    public function up()
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 45);
        $table->string('apellido', 45);
        $table->integer('numero');
        $table->integer('edad');
        $table->boolean('genero'); 
        $table->boolean('estado');
        $table->timestamps();
    });
}

}
