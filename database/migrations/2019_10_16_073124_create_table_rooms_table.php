<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('no_room');
            $table->integer('no_slot');
            $table->integer('no_bed');
            $table->boolean('vip');
            $table->string('avatar_room')->nullable();
            $table->integer('price');
            $table->string('detail');
            $table->string('status','1')->nullable();
            $table->integer('id_hotel')->unsigned();
            $table->foreign('id_hotel')->references('id')->on('hotels');
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
        Schema::dropIfExists('rooms');
    }
}
