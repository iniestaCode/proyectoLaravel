<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCriterioArchivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_criterio_archivo', function (Blueprint $table) {
            $table->integerIncrements('idArchivoCriterio');
            $table->integer('idCriterio');
            $table->integer('idArchivo');
            $table->float('valorMax',4,2);
            $table->float('valorMin',4,2);
            $table->foreign('idCriterio')->references('idCriterio')->on('table_criterio');
            $table->foreign('idArchivo')->references('idArchivo')->on('table_archivo');
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
        Schema::dropIfExists('table_criterio_archivo');
    }
}
