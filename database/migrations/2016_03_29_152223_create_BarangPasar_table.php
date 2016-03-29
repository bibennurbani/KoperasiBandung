<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangPasarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BarangPasar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('barang_id')->unsigned();
            $table->bigInteger('pasar_id')->unsigned();
            $table->decimal('harga', 18, 2);
            $table->timestamps();

            $table->foreign('barang_id')->references('id')->on('Barang');
            $table->foreign('pasar_id')->references('id')->on('Pasar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('BarangPasar');
    }
}
