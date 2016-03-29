<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserRole', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('code',4);
            $table->string('nama',15);
            $table->string('deskripsi',15);
            $table->timestamps();
        });

        Schema::create('User', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('userrole_Id')->unsigned();
            $table->string('nama',25);
            $table->string('alamat',25);
            $table->boolean('aktif');
            $table->timestamps();

            $table->foreign('userrole_Id')->references('id')->on('UserRole');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
        Schema::drop('User');
        Schema::drop('UserRole');
    }
}
