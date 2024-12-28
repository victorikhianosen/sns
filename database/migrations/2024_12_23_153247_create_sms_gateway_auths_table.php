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
        Schema::create('sms_gateway_auths', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('sms_gateway_id')->constrained('sms_gateways')->cascadeOnDelete();
            $table->foreignId('smpp_provider_id')->constrained('smpp_providers')->cascadeOnDelete();
            $table->foreignId('mobile_network_id')->constrained('mobile_networks')->cascadeOnDelete();
            $table->foreignId('sms_smpp_bind_type_id')->constrained('sms_smpp_bind_types')->cascadeOnDelete();
            $table->string('smpp_connection_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_gateway_auths');
    }
};
