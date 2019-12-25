<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnteproyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_anteproyecto', function (Blueprint $table) {
            $table->integerIncrements('idAnteproyecto');
            $table->string('tituloAnteproyecto');
            $table->date('fechaInicio');
            $table->date('fechaTermino');
            $table->string('objetivoGeneral');
            $table->string('objetivoEspecifico');
            $table->string('justificacion');
            $table->string('alcancesLimites');
            $table->string('areaDesarrollo');
            $table->char('statusAnteproyecto',1);
            $table->integer('idOpcion');
            $table->string('numeroControl',20);
            $table->string('claveOrganizacion');
            $table->foreign('idOpcion')->references('idOpcion')->on('table_opciones');
            $table->foreign('numeroControl')->references('numeroControl')->on('table_alumno');
            $table->foreign('claveOrganizacion')->references('claveOrganizacion')->on('table_organizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_anteproyecto');
    }
}
