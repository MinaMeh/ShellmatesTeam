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
             $table->engine = 'InnoDB';
           $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('password');
            $table->string('facebook');
            $table->string('school');
            $table->string('year');
            $table->string('phone');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')
                    ->references('id')
                    ->on ('roles');
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