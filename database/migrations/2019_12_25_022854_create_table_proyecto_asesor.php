<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProyectoAsesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_proyecto_asesor', function (Blueprint $table) {
            $table->integerIncrements('idProyectoAsesor');
            $table->integer('claveAsesor');
            $table->string('claveProyecto',20);
            $table->double('calificacion',4,2);
            $table->foreign('claveAsesor')->references('claveAsesor')->on('table_asesor');
            $table->foreign('claveProyecto')->references('claveProyecto')->on('table_proyecto');
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
        Schema::dropIfExists('table_proyecto_asesor');
    }
}
