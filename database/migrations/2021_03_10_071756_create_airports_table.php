<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /******************************
     * Author:Asha chandran
     * Date:10/03/2021
     * Module:Admin
     * function:add fields in table
     * ***************************/
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string('airportname');
            $table->string('city');
            $table->string('state');
            $table->integer('zipcode');
            $table->string('timezone');
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
        Schema::dropIfExists('airports');
    }
}
