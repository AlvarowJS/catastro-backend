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
        Schema::create('descripcion_predios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ficha_id')->nullable()->constrained('fichas');
            $table->string("linderos_lote");
            $table->string("medida_campo");
            $table->string("medida_titulo");
            $table->string("colindancia_campo");
            $table->string("colindancia_titulo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descripcion_predios');
    }
};
