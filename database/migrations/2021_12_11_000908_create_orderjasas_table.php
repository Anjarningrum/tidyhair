<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderjasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderjasas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_branch');
            $table->unsignedBigInteger('id_barber');
            $table->unsignedBigInteger('id_jasa');
            $table->integer('total_harga');
            $table->integer('qty');
            $table->string('alamat');
            $table->integer('ongkir');
            $table->enum('metode_pembayaran', ['ovo','dana','cash']);
            $table->enum('status',['active','finished','canceled']);
            $table->timestamps();

            $table->foreign('id_branch')->references('id')->on('users');
            $table->foreign('id_barber')->references('id')->on('barbers');
            $table->foreign('id_jasa')->references('id')->on('jasas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderjasas');
    }
}
