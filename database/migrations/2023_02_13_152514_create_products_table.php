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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('brand_id');
            $table->string('name');
            $table->longText('description');
            $table->string('slug');
            $table->string('original_price');
            $table->string('selling_price');
            $table->string('attachment')->nullable();
            $table->string('quantity');
            $table->string('tax')->default("16");
            $table->tinyInteger('status')->default(0)->comment('0: featured, 1: trending, 2: limited_edition, 3: best_seller');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->softDeletes();
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
