<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CuestionarioSujeto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionario_sujeto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cuestionario_id');
            $table->integer('sujeto_id');
            $table->timestamp('updated_at');

            //Relations

            $table->foreign('cuestionario_id')->references('id')->on('cuestionarios')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('sujeto_id')->references('id')->on('sujetos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuestionario_sujeto');
    }
}
