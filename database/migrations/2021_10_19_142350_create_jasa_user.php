<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasaUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa_user', function (Blueprint $table) {
            $table->unsignedBigInteger('jasa_id');
            $table->unsignedBigInteger('user_id');
    
            $table->foreign('jasa_id')->references('id')->on('jasas')
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
        Schema::dropIfExists('jasa_user');
    }
}
