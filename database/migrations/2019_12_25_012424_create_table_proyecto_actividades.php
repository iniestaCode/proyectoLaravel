<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProyectoActividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_proyecto_actividades', function (Blueprint $table) {
            $table->integerIncrements('idProyectoActividades');
            $table->string('claveProyecto',20);
            $table->integerIncrements('idActividad');
            $table->foreign('claveProyecto')->references('claveProyecto')->on('table_proyecto');
            $table->foreign('idActividad')->references('idActividad')->on('table_actividad');
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
        Schema::dropIfExists('table_proyecto_actividades');
    }
}
