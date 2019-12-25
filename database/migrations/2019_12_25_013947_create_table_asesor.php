<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAsesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_asesor', function (Blueprint $table) {
            $table->integerIncrements('claveAsesor');
            $table->string('nombreAsesor',100);
            $table->string('primerUnoAsesor',100);
            $table->string('primerDosAsesor',100);
            $table->string('telefonoAsesor',15);
            $table->string('correoElectronicoAsesor',200);
            $table->integer('codigoPostalAsesor');
            $table->string('calle',150);
            $table->string('colonia',100);
            $table->string('numeroInterior',50);
            $table->string('numeroExterior',50);
            $table->char('statusAsesor',1);
            $table->string('usuario',100);
            $table->integer('idTipoAsesor');
            $table->integer('idCarrera');
            $table->string('claveOrganizacion',100);
            $table->foreign('idCarrera')->references('idCarrera')->on('carrera');
            $table->foreign('idTipoAsesor')->references('idTipoAsesor')->on('table_tipo_asesor');
            $table->foreign('usuario')->references('usuario')->on('usuario');
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
        Schema::dropIfExists('table_asesor');
    }
}
