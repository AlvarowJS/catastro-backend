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
        Schema::create('litigantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ficha_id')->nullable()->constrained('fichas');
            $table->string("tipo_liti");
            $table->string("n_doc_liti");
            $table->string("apellido_nombre_liti");
            $table->string("cod_contrib");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('litigantes');
    }
};
