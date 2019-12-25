<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAsesorAlumnoArchivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_asesor_alumno_archivo', function (Blueprint $table) {
            $table->integerIncrements('idAsesorAlumnoArchivo');
            $table->integer('claveAsesor');
            $table->integer('idAlumnoArchivo');
            $table->foreign('idAlumnoArchivo')->references('idAlumnoArchivo')->on('table_alumno_archivo');
            $table->foreign('claveAsesor')->references('claveAsesor')->on('table_asesor');
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
        Schema::dropIfExists('table_asesor_alumno_archivo');
    }
}
