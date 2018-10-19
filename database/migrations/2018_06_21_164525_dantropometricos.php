<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dantropometricos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dantropometricos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('peso',2,2);
            $table->decimal('talla',2,2);
            $table->decimal('imc',2,2);
            $table->decimal('metBasal',2,2);
            $table->decimal('masaGrasa',2,2);
            $table->decimal('masaLibre',2,2);
            $table->decimal('masaMusculo',2,2);
            $table->decimal('masaOsea',2,2);
            $table->decimal('agua',2,2);       
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dantropometricos');
    }
}
