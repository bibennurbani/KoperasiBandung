<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembelianBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('PembelianBarang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pembelian_id')->unsigned();
            $table->bigInteger('barangPasar_id')->unsigned();
            $table->integer('banyak_pembelian');
            $table->decimal('harga_pembelian',18,2);
            $table->decimal('total_harga',18,2);
            $table->timestamps();

            $table->foreign('pembelian_id')->references('id')->on('Pembelian');
            $table->foreign('barangPasar_id')->references('id')->on('BarangPasar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PembelianBarang');
    }
}
