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
            $table->id();
            $table->unsignedBigInteger('category_id')->index();

            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->decimal('price');
            $table->decimal('vat_percentage')->default(5);

            $table->integer('stock_quantity')->default(0);
            $table->string('unit'); // Btl, Box, Kg, PCS, Ltr

            $table->boolean('status')->default(1);
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_recommend')->default(0);
            $table->boolean('is_top_rated')->default(0);
            $table->boolean('is_onsale')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
