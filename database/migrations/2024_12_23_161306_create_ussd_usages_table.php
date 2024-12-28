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
        Schema::create('ussd_usages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ussd_shortcode_id')->constrained('ussd_short_codes')->cascadeOnDelete(); // Assuming foreign key to USSD shortcodes
            $table->integer('ussd_count');
            $table->decimal('amount_charged', 10, 2);
            $table->foreignId('mobile_network_id')->constrained('mobile_networks')->cascadeOnDelete(); // Assuming foreign key to networks
            $table->decimal('opening_balance', 10, 2);
            $table->decimal('closing_balance', 10, 2);
            $table->decimal('session_charged', 10, 2);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Assuming foreign key to users
            $table->timestamp('usage_date');
            $table->decimal('amount_credited', 10, 2)->nullable(); // Nullable to allow for cases where no credit is added
            $table->string('trans_type'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ussd_usages');
    }
};
