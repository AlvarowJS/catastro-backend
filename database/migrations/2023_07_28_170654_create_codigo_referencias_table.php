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
        Schema::create('codigo_referencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ficha_id')->nullable()->constrained('fichas');
            $table->char("dpto", 2);
            $table->char("prov", 2);
            $table->char("dist", 2);
            $table->string("sector");
            $table->string("manzana");
            $table->string("lote");
            $table->string("edifica");
            $table->string("entrada");
            $table->string("piso");
            $table->string("unidad");
            $table->string("dc");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codigo_referencias');
    }
};
