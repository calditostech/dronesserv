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
         $table->string('image');
         $table->string('address');
         $table->string('battery');
         $table->float('max_speed');
         $table->float('average_speed');
         $table->boolean('status');
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
