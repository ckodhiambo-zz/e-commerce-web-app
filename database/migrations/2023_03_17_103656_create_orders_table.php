<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('shipping_name');
            $table->string('shipping_email');
            $table->string('delivery_address');
            $table->string('shipping_phone');
            $table->string('delivery_date')->nullable();
            $table->decimal('total_price', 10, 2)->nullable();
            $table->string('message')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0: pending, 1: processing, 2: delivered, 3: cancelled, 4: returned, 5: shipped');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
