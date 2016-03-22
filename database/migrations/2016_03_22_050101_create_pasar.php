<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pasar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pdpasar_id')->unsigned();
            $table->string('nama',25);            
            $table->string('wilayah',25);
            $table->string('alamat',50);
            $table->timestamps();

            $table->foreign('pdpasar_id')->references('id')->on('PDPasar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Pasar');
    }
}
