<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_contacto', function (Blueprint $table) {
            $table->integerIncrements('idContacto');
            $table->string('nombreContacto');
            $table->string('apellidoUnoContacto');
            $table->string('apellidoDosContacto');
            $table->string('telefonoContacto');
            $table->string('correoContacto');
            $table->integer('codigoPostal');
            $table->char('statusContacto');
            $table->integer('idParentezcoC');
            $table->timestamps();
            $table->foreign('idParentezcoC')
                ->references('idParentezco')
                ->on('table_parentezco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_contacto');
    }
}
