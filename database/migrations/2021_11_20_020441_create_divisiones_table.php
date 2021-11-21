<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        //crear tabla de divisiones
        Schema::create('divisiones', function (Blueprint $table) {
            $table->bigIncrements('divisiones_id');
            $table->string('divisiones_nombre', 45)->unique();
            $table->integer('divisiones_id_superior')->insigned()->nullable();
            $table->integer('divisiones_nivel')->random_int();
            $table->integer('divisiones_colaboradores')->random_int();
            $table->string('divisiones_nombreEmbajador',50)->nullable();
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
        Schema::dropIfExists('divisiones');
    }
}
