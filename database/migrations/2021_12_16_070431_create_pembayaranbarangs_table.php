<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaranbarangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('branch_id');
            $table->enum('metode_pembayaran', ['ovo', 'dana', 'cash']);
            $table->enum('status', ['confirmed', 'unconfirmed', 'rejected']);
            $table->string('jumlah_pembayaran');
            $table->string('image');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('transaksi_id')->references('id')->on('transaksibarangs');
            $table->foreign('branch_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaranbarangs');
    }
}
