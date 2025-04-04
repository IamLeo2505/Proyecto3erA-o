<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'telefono', 'direccion'];

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'empleado_id');
    }

    public function up()
{
    Schema::create('empleados', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 45);
        $table->string('apellido', 45);
        $table->string('telefono', 45);
        $table->string('direccion', 255);
        $table->timestamps();
    });
}

}
