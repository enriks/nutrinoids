<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->string('nivelEstudio');
        $table->boolean('estudioActual')->default(0);
        $table->enum('nivelEstudioPadre',['sinEstudios','primarios','secundarios(Bachiller_FPI)','superiores(Universidad(Bachiller_FPII)']);
        $table->enum('nivelEstudioMadre',['sinEstudios','primarios','secundarios(Bachiller_FPI)','superiores(Universidad(Bachiller_FPII)']);
        $table->integer('NS_NC');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudios');
    }
}
