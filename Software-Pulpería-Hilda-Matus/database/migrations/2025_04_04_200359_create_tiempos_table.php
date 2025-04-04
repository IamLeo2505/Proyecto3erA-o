<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tiempos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->smallInteger('año');
            $table->tinyInteger('mes');
            $table->tinyInteger('dia');
            $table->string('dia_semana', 45);
            $table->string('trimestre', 45);
            $table->tinyInteger('horario');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tiempos');
    }
};

