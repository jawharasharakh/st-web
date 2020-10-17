<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('orderID');
            $table->unsignedBigInteger('productCode');
            $table->integer('Qty');
            $table->numeric('priceEach' ,19,0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('productCode')->references('code')->on('products');
            $table->foreign('orderID')->references('id')->on('productiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
