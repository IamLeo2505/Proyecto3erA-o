<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'compañia', 'numero'];

    public function up()
{
    Schema::create('proveedores', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 45);
        $table->string('apellido', 45);
        $table->string('compañia', 45);
        $table->integer('numero');
        $table->timestamps();
    });
}

}
