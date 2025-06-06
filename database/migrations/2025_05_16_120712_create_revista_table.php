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
        Schema::create('revista', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cupof')->index('id cupof');
            $table->date('fd');
            $table->date('fh');
            $table->integer('id_tipousuario');
            $table->integer('secuencia');
            $table->string('situacion', 30);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revista');
    }
};
