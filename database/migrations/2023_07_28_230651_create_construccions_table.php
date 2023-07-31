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
        Schema::create('construccions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ficha_id')->nullable()->constrained('fichas');
            $table->string("n_piso_sotano_mezzanine");
            $table->string("mes");
            $table->string("anio");
            $table->string("mep");
            $table->string("ecs");
            $table->string("ecc");
            $table->string("muro_columnas");
            $table->string("techos");
            $table->string("pisos");
            $table->string("puertas_ventanas");
            $table->string("revest");
            $table->string("banios");
            $table->string("inst_electrica");
            $table->string("declarada");
            $table->string("verificada");
            $table->string("uca");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('construccions');
    }
};
