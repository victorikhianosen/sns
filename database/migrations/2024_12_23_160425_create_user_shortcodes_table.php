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
        Schema::create('user_shortcodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('ussd_shortcode_id')->constrained('ussd_shortcodes')->cascadeOnDelete();
            $table->foreignId('mobile_network_id')->constrained('mobile_networks')->cascadeOnDelete();
            $table->string('billing_plan');
            $table->decimal('session_balance', 15, 2)->default(0.00);
            $table->decimal('session_cost_price', 10, 2)->default(0.00);
            $table->decimal('session_selling_price', 10, 2)->default(0.00);
            $table->string('service_code');
            $table->string('service_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_shortcodes');
    }
};
