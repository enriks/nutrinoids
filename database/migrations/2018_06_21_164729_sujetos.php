<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sujetos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sujetos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('fechaNac');
            $table->integer('codigo');
            $table->string('imagenurl',128)->nullable();
            $table->unsignedInteger('comunidades_id');
            $table->index('comunidades_id');
            $table->foreign('comunidades_id')
            ->references('id')->on('comunidades')
            ->onDelete('cascade');
            $table->enum('trabaja',['COMPLETA','PARCIAL','TURNO','NO'])->default('COMPLETA');
            $table->unsignedInteger('poblaciones_id');
            $table->index('poblaciones_id');
            $table->foreign('poblaciones_id')
            ->references('id')->on('poblaciones')
            ->onDelete('cascade');
            $table->unsignedInteger('nacionalidades_id');
            $table->index('nacionalidades_id');
            $table->foreign('nacionalidades_id')
            ->references('id')->on('nacionalidades')
            ->onDelete('cascade');
            $table->enum('sexo',['MASCULINO','FEMENINO'])->default('FEMENINO');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sujetos');
    }
}
