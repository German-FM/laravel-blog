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
        Schema::create('ciclosuperior', function (Blueprint $table) {
            $table->integer('id', true);
            $table->tinyInteger('id_cursos')->index('id del curso');
            $table->integer('id_orientaciones')->index('id orientacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciclosuperior');
    }
};
