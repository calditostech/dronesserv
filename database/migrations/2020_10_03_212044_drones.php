<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drones extends Migration
{
    
    public function up()
    {
        Schema::create('drones', function (Blueprint $table){
         $table->increments('id');
         $table->string('name');
         $table->string('current_fly');
         $table->string('status');
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
        Schema::drop('drones');
    }
}
