<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title','100')->unique();
            $table->string('description');
            $table->string('document')->default("");
            $table->string('result')->default('Sem resultado'); //resultado fecha clicando em um botao
            $table->boolean('opened')->default(false); //abrir votacao
            $table->integer('visible')->default(0);; //0- Não Visivel | 1- Visivel para todos | 2 - Visivel cadastrados
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
        Schema::dropIfExists('topics');
    }
}
