<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VinhMakeTableBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_hotel');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('days');
            $table->integer('status'); //1 là đang có khách, 2 là đang đợi đến, 0 là rảnh
            $table->integer('totalall');
            $table->string('note');
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
        //
    }
}
