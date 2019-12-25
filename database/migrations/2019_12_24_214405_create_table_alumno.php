<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_alumno', function (Blueprint $table) {
            $table->string('numeroControl',20);
            $table->string('nombreAlumno');
            $table->string('apellidoUnoAlumno');
            $table->string('apellidoDosAlumno');
            $table->string('semestre');
            $table->string('telefonoAlumno');
            $table->string('correoAlumno');
            $table->string('planEstudios');
            $table->string('NSS');
            $table->char('statusAlumno');
            $table->string('claveCarrera');
            $table->string('usuario');
            $table->foreign('claveCarrera')->references('table_carrera')->on('claveCarrera');
            $table->foreign('usuario')->references('table_usuario')->on('usuario');
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
        Schema::dropIfExists('table_alumno');
    }
}
