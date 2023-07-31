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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();

            $table->string("tipo_ficha");

            $table->char("cuc", 12);
            $table->char("codigo_hoja", 10);
            // $table->foreignId('codigo_referencia_id')->nullable()->constrained('codigo_referencias');

            $table->string("cod_contribuyente")->nullable();
            $table->string("cod_predial")->nullable();
            $table->string("unidad_acumulada")->nullable();

            // Ubiccion predial
            // $table->foreignId('ubicacion_predio_id')->nullable()->constrained('ubicacion_predios');
            $table->string("nombre_edif")->nullable();
            $table->char("tipo_edif", 2)->nullable();
            $table->char("tipo_interior", 2)->nullable();
            $table->char("n_interior", 2)->nullable();
            $table->string("codigo_hug")->nullable();
            $table->string("nombre_hab_urb")->nullable();
            $table->string("zona")->nullable();
            $table->string("manzana")->nullable();
            $table->string("lote")->nullable();
            $table->string("sub_lote")->nullable();

            // Identitifacion del titular catastral
            $table->string("tipo_titutal")->nullable();
            $table->string("estado_civil")->nullable();
            // $table->foreignId('titular_id')->nullable()->constrained('titulars');
            $table->string("n_ruc")->nullable();
            $table->string("razon_social")->nullable();
            $table->string("pers_jurid")->nullable();
            $table->string("cond_especial")->nullable();
            $table->string("n_resolucion_exn")->nullable();
            $table->string("n_boleta_pension")->nullable();
            $table->date("f_inicio_exn")->nullable();
            $table->date("f_venc_exn")->nullable();

            // Domicilio fiscal
            $table->string("departamento_fis")->nullable();
            $table->string("provincia_fis")->nullable();
            $table->string("distrito_fis")->nullable();
            $table->string("telefono_fis")->nullable();
            $table->string("anexo_fis")->nullable();
            $table->string("fax_fis")->nullable();
            $table->string("correo_electronico")->nullable();

            // Caracteristicas de titularidad
            $table->string("condicion_titular")->nullable();
            $table->string("forma_adqui")->nullable();
            $table->string("fecha_adqui")->nullable();
            $table->string("condicion_esp_predio")->nullable();
            $table->string("n_resol_exon_predio")->nullable();
            $table->string("porcentaje")->nullable();
            $table->string("fecha_inicio")->nullable();
            $table->string("fecha_venc")->nullable();

            // II
            // Descripcion predio
            $table->string("clasificacion_predio")->nullable();
            $table->string("predio_catastral")->nullable();
            $table->string("codigo_uso")->nullable();
            $table->string("uso_predio")->nullable();
            $table->string("estructuracion")->nullable();
            $table->string("zonificacion")->nullable();
            $table->string("area_terreno_titulo")->nullable();
            $table->string("area_terreno_declarada")->nullable();
            $table->string("area_terreno_verificado")->nullable();
            // Recordar preguntar sobre colindancias segun titulo!!!
            // $table->foreignId('descripcion_predio_id')->nullable()->constrained('descripcion_predios')->nullable();

            // servicios basicos
            $table->string("luz")->nullable();
            $table->string("agua")->nullable();
            $table->string("telefono")->nullable();
            $table->string("desague")->nullable();
            $table->string("n_suministro_luz")->nullable();
            $table->string("n_contrato_de_agua")->nullable();
            $table->string("n_telefono")->nullable();

            // Construcciones

            // Obras complementarias (Ojo que existe un anexo indicando los codigos)

            // III
            // Documentos
            $table->string("nombre_notaria")->nullable();
            $table->string("kardex")->nullable();
            $table->date("fecha_escritura")->nullable();

            // Inscripcion del predio catastral en el registro de predios
            $table->string("tipo_partida_reg")->nullable();
            $table->string("numero_insc")->nullable();
            $table->string("fojas_insc")->nullable();
            $table->string("asiento_insc")->nullable();
            $table->date("fecha_insc")->nullable();
            $table->string("declar_fabrica")->nullable();
            $table->string("asiento_insc_fabrica")->nullable();
            $table->string("fecha_insc_fabrica")->nullable();

            // Evaluacion de predio catastral
            $table->json("evaluacion_predio")->nullable();
            $table->json("area_terreno_invadida")->nullable();

            // informacion complementaria
            $table->string("condicion_declarante")->nullable();
            // Identificacion de los litigantes
            $table->string("estado_llenado_ficha")->nullable();
            $table->string("n_habitantes")->nullable();
            $table->string("n_familias")->nullable();
            $table->string("mantenimiento")->nullable();
            $table->text("observacion")->nullable();
            $table->string("firma_declarante")->nullable();
            $table->string("dni_declarante")->nullable();
            $table->string("apellidos_nombre_declarante")->nullable();
            $table->string("fecha_declarante")->nullable();
            $table->string("firma_supervisor")->nullable();
            $table->string("dni_supervisor")->nullable();
            $table->string("apellidos_nombre_supervisor")->nullable();
            $table->string("fecha_supervisor")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};
