<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderbarangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->integer('total_harga');
            $table->integer('qty');
            $table->string('alamat');
            $table->integer('ongkir');
            $table->enum('metode_pembayaran', ['ovo','dana','cash']);
            $table->enum('status',['active','finished','canceled']);
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderbarangs');
    }
}
