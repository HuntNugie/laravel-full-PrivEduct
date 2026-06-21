<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("order_id")->constrained("orders");
            $table->string("midtrans_transaction_id")->nullable();
            $table->text('snap_token')->nullable();

            $table->decimal('amount', 12, 2);

            $table->string('payment_method')
                ->nullable();

            $table->string('status')
                ->default('pending');

            $table->timestamp('paid_at')
                ->nullable();

            $table->timestamp('expired_at')
                ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
