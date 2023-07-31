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
            $table->char("dpto", 2)->nullable();
            $table->char("prov", 2)->nullable();
            $table->char("dist", 2)->nullable();
            $table->string("sector")->nullable();
            $table->string("manzana")->nullable();
            $table->string("lote")->nullable();
            $table->string("edifica")->nullable();
            $table->string("entrada")->nullable();
            $table->string("piso")->nullable();
            $table->string("unidad")->nullable();
            $table->string("dc")->nullable();
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
