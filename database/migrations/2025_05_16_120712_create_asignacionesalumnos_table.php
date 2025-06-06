<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asignacionesalumnos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_cursosciclolectivo')->index('id_cursosciclolectivo');
            $table->integer('id_tipousuario');
            $table->tinyInteger('id_grupos')->index('id grupos');
            $table->string('estado', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacionesalumnos');
    }
};
