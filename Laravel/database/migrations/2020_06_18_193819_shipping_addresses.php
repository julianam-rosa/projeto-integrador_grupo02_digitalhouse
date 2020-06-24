<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShippingAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->string('state');
            $table->string('city');
            $table->string('neighborhood');
            $table->string('street');
            $table->integer('number');
            $table->string('complement')->nullable();
            $table->bigInteger('postalCode');
            $table->timestamps();

            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_addresses');
    }
}
