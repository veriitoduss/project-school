<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionDMGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_d_m_g_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Profesor_id');
            $table->unsignedBigInteger('Grado_id');
            $table->unsignedBigInteger('Materia_id');
            $table->foreign('Profesor_id')->references('id')->on('profesors');
            $table->foreign('Grado_id')->references('id')->on('grades');
            $table->foreign('Materia_id')->references('id')->on('materias');
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
        Schema::dropIfExists('asignacion_d_m_g_s');
    }
}
