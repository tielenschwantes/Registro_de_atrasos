<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_aluno')->unsigned();
            $table->string('motivo');
            $table->string('materia');
            $table->dateTime('datahoraatraso');
            $table->timestamps();
        });

        Schema::table('registros', function($table){
            $table->foreign('id_aluno')->references('id')->on('User');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
