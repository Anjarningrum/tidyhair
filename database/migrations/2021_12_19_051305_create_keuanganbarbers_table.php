<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeuanganbarbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keuanganbarbers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barber_id');
            $table->date('tanggal')->nullable();
            $table->string('debet')->nullable();
            $table->string('kredit')->nullable();
            $table->string('saldo')->nullable();
            $table->timestamps();

            $table->foreign('barber_id')->references('id')->on('barbers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keuanganbarbers');
    }
}
