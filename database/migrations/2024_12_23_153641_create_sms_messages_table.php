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
        Schema::create('sms_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('status');
            $table->string('title');
            $table->text('message');
            $table->timestamp('last_updated')->nullable();
            $table->string('message_id')->nullable();
            $table->string('status_code')->nullable();
            $table->decimal('opening_balance', 15, 2)->nullable();
            $table->decimal('closing_balance', 15, 2)->nullable();
            $table->integer('page_number')->nullable();
            $table->decimal('page_rate', 10, 2)->nullable();
            $table->decimal('amount', 15, 2)->nullable();
            $table->string('destination')->nullable();
            $table->uuid('uuid')->nullable();
            $table->foreignId('route_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('mno')->nullable();
            $table->foreignId('strategy_id')->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_messages');
    }
};
