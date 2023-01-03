<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionAGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_a_g_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Grado_id');
            $table->unsignedBigInteger('Estudiante_id');
            $table->foreign('Grado_id')->references('id')->on('grades');
            $table->foreign('Estudiante_id')->references('id')->on('estudiantes');
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
        Schema::dropIfExists('asignacion_a_g_s');
    }
}
