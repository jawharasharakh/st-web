<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
           
            $table->integer('code');
            $table->unsignedBigInteger('productID');
            $table->string('Name' ,255 );
            $table->integer('Scale');
            $table->string('Vendor' ,255 );
            $table->string('pdtDescription' ,255 );
            $table->integer('QtyInStock');
            $table->string('MSRP' ,255 );
            $table->timestamps();

            $table->foreign('productID')->references('id')->on('productiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
