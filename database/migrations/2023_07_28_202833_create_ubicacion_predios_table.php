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
        Schema::create('ubicacion_predios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ficha_id')->nullable()->constrained('fichas');
            $table->string("codigo_via")->nullable();
            $table->string("nombre_via")->nullable();
            $table->string("tipo_via")->nullable();
            $table->string("nombre_tipo_via")->nullable();
            $table->string("tipo_puerta")->nullable();
            $table->string("n_municipal")->nullable();
            $table->string("condicion_numeracion")->nullable();
            $table->string("n_certificado")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubicacion_predios');
    }
};
