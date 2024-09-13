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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable();
            $table->integer('attribute_id')->unsigned()->nullable();
            $table->integer('attribute_option_id')->unsigned()->nullable();
            $table->float('price')->default(0)->nullable();
            $table->integer('stock')->default(0)->nullable();
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('attribute_option_id')->references('id')->on('attribute_options')->onDelete('cascade');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
