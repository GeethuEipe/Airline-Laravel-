<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /*@Author:Athulya A
     * @Date:9/3/2021
     * @Module:User
     * @Function:database migration
     * Run the migrations.
     * @return void
     ********************/
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('age');
            $table->string('gender');
            $table->string('address');
            $table->integer('phoneno');
            $table->string('email');
            $table->string('password');
            $table->integer('adhar');
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
        Schema::dropIfExists('registers');
    }
}
