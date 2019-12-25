<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlumnoArchivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_alumno_archivo', function (Blueprint $table) {
            $table->integerIncrements('idAlumnoArchivo');
            $table->string('numeroControl',20);
            $table->integer('idArchivo');
            $table->string('ubicacionArchivo')->unique();
            $table->foreign('idArchivo')->references('idArchivo')->on('archivo');
            $table->foreign('numeroControl')->references('numeroControl')->on('alumno');
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
        Schema::dropIfExists('table_alumno_archivo');
    }
}
