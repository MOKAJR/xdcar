<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowcars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showcars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('make');
            $table->string('model');
            $table->longText('des');
            $table->integer('qun');
            $table->integer('price');
            $table->boolean('activ');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');


            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('showcars');
    }
}
