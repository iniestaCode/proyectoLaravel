<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCarrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_carrera', function (Blueprint $table) {
            $table->string('claveCarrera');
            $table->string('nombreCarrera');
            $table->string('planEstudios');
            $table->char('statusCarrera');
            $table->primary('claveCarrera');
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
        Schema::dropIfExists('table_carrera');
    }
}
