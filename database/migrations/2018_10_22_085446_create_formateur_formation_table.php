<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormateurFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formateur_formation', function (Blueprint $table) {
           $table->engine = 'InnoDB';
            $table->integer('formateur_id')->unsigned();
            $table->foreign('formateur_id')
                  ->references('id')
                  ->on ('formateurs');
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')
                  ->references('id')
                  ->on ('formations');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('formateur_formation');

    }
}
