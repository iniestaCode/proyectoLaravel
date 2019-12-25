<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePresidenteAcademia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_presidente_academia', function (Blueprint $table) {
            $table->integerIncrements('idPresidenteAcademia');
            $table->integer('claveAsesor');
            $table->char('statusPresidenteAcademia',1);
            $table->foreign('claveAsesor')->references('claleAsesor')->on('table_asesor');
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
        Schema::dropIfExists('table_presidente_academia');
    }
}
