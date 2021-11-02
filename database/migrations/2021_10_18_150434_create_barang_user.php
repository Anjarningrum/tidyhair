<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_user', function (Blueprint $table) {
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('user_id');
    
            $table->foreign('barang_id')->references('id')->on('barangs')
            ->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_user');
    }
}
