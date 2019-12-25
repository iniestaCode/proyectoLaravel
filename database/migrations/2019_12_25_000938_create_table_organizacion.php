<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrganizacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_Empresa', function (Blueprint $table) {
            $table->string('claveOrganizacion',100);
            $table->string('nombreEmpresa');
            $table->string('telefonoEmpresa',15);
            $table->string('correoElectronicoEmpresa');
            $table->integer('idSector');
            $table->foreign('idSector')->references('idSector')->on('sector');
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
        Schema::dropIfExists('table_organizacion');
    }
}
