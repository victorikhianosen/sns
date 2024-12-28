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
        Schema::create('sms_payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 15, 2);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->decimal('sms_rate', 10, 2);
            $table->string('status');
            $table->string('reference')->unique();
            $table->text('narration')->nullable();
            $table->decimal('opening_balance', 15, 2)->nullable();
            $table->decimal('closing_balance', 15, 2)->nullable();
            $table->date('payment_date')->nullable();
            $table->decimal('net_amount', 15, 2)->nullable();
            $table->string('attachment_filename')->nullable();
            $table->string('payment_type');
            $table->string('payment_gateway');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_payments');
    }
};
