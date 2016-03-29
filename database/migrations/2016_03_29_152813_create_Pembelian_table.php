<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('Pembelian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->decimal('total_pembelian',18,2);
            $table->dateTime('tanggal_transaksi');
            $table->dateTIme('tanggal_dibutuhkan');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('User');
            $table->foreign('status_id')->references('id')->on('Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Pembelian');
    }
}
