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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->text('product_description')->nullable();
            $table->decimal('product_price', 10, 2);    
            $table->integer('product_stock')->default(0);
        $table->string('product_image')->nullable();
    }
        );

        Schema::create('product_categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name');
            $table->text('category_description')->nullable();
        });

        
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_categories');
    }
};