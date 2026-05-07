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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index();

            $table->string('order_number')->unique();

            $table->decimal('subtotal', 10, 2);
            $table->decimal('vat_total', 10, 2);
            $table->decimal('total_amount', 10, 2);
            $table->unsignedBigInteger('billing_address_id')->index()->nullable();
            $table->boolean('ship_to_different_address')->default(false);
            $table->unsignedBigInteger('shipping_address_id')->index()->nullable();
            // Order Notes
            $table->text('order_notes')->nullable();
            $table->enum('payment_status', ['pending', 'paid', 'failed'])
                ->default('pending');
            $table->enum('order_status', [
                'pending',
                'confirmed',
                'shipped',
                'delivered',
                'cancelled'
            ])->default('pending');

            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
