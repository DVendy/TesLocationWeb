<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bis', function ($table) {
            $table->string('status');
            $table->string('keterangan2');
        });  

        Schema::create('map', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bis_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->datetime('date');
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
