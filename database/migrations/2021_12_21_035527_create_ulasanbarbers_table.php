<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlasanbarbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulasanbarbers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barber_id');
            $table->unsignedBigInteger('customer_id');
            $table->string('rating');
            $table->string('komentar');
            $table->timestamps();

            $table->foreign('barber_id')->references('id')->on('barbers');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ulasanbarbers');
    }
}
