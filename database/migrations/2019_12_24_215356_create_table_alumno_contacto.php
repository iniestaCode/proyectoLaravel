<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlumnoContacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_alumno_contacto', function (Blueprint $table) {
            $table->integerIncrements('idAlumnoContacto');
            $table->string('numeroControl');
            $table->integer('idContacto');
            $table->foreign('numeroControl')->references('table_alumno')->on('numeroControl');
            $table->foreign('idContacto')->references('table_contacto')->on('idContacto');
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
        Schema::dropIfExists('table_alumno_contacto');
    }
}
