<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
           
            $table->string('airline');
            $table->string('fl_number');
            $table->string('departure');
            $table->string('dep_date');
            $table->string('dep_time');
            $table->string('destination');
            $table->string('dest_date');
            $table->string('dest_time');
            $table->integer('btseats');
            $table->integer('ftseats');
            $table->integer('etseats');
            $table->integer('baseat');
            $table->integer('faseat');
            $table->integer('easeat');
            $table->integer('cost');
            $table->integer('seatsa');
            $table->integer('bcost');
            $table->integer('fcost');
            $table->integer('ecost');
            $table->integer('bccost');
            $table->integer('fccost');
            $table->integer('eccost');
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
        Schema::dropIfExists('flights');
    }
}
