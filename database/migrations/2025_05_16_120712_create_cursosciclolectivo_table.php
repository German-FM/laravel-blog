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
        Schema::create('cursosciclolectivo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('estado', 1);
            $table->integer('id_cursos')->index('id cursos');
            $table->year('ciclolectivo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursosciclolectivo');
    }
};
