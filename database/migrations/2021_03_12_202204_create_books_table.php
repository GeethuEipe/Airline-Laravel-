<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('airline');
            $table->string('fl_number');
            $table->string('departure');
            $table->string('dep_date');
            $table->string('dep_time');
            $table->string('destination');
            $table->string('dest_date');
            $table->string('class');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');

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
        Schema::dropIfExists('books');
    }
}
