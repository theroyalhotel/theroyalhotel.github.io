<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->integer('phone');
            $table->string('email');
            $table->string('avatar_hotel');
            $table->text('utilities')->nullable();
            $table->integer('id_place')->unsigned();
            $table->foreign('id_place')->references('id')->on('places');
            $table->string('detail','1500')->nullable();
            $table->string('location','500')->nullable();
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
        Schema::dropIfExists('hotels');
    }
}
