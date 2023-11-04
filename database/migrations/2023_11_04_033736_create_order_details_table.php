<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('orderDetailsId');

            $table->unsignedBigInteger('orderId');
            $table->foreign('orderId')->references('orderId')->on('orders');
            $table->unsignedBigInteger('productId');
            $table->foreign('productId')->references('productId')->on('products');

            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
