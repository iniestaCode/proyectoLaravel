<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHabilidadAsesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_habilidad_asesor', function (Blueprint $table) {
            $table->integerIncrements('idHabilidadAsesor');
            $table->integer('idHabilidad');
            $table->integer('claveAsesor');
            $table->foreign('claveAsesor')->references('claveAsesor')->on('table_asesor');
            $table->foreign('idHabilidad')->references('idHabilidad')->on('table_habilidad');
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
        Schema::dropIfExists('table_habilidad_asesor');
    }
}
