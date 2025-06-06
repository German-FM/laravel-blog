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
        Schema::create('tipousuario', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_persona')->index('id_persona');
            $table->integer('id_tipopersona')->index('id_tipopersona');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipousuario');
    }
};
