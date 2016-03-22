<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',25);
            $table->timestamps();
        });
        
        Schema::create('Status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->string('code');
            $table->string('name');
            $table->string('description');
            
            
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('Type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Status');
        Schema::drop('Type');
    }
}
