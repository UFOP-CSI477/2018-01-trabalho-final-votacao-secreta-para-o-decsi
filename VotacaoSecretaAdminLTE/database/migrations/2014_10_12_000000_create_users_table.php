<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('type')->default(0);
            /* 0 - Secretario | 1- Professor-DECSI | 2- Professor-DECEA| 3- Professor-DEENP|
             4- Professor-DEELT | 5- Alunos-DECSI  | 6- Alunos-DECEA| 7- Alunos-DEENP|
             8- Alunos-DEELT
            */
            $table->string('email','150')->unique();
            $table->string('cpf','50')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
