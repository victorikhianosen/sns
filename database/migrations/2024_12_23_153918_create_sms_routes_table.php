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
        Schema::create('sms_routes', function (Blueprint $table) {
            $table->id();
            $table->string('sender_id');
            $table->string('mno');
            $table->foreignId('sms_gateway_auth_id')->constrained('sms_gateway_auths')->cascadeOnDelete();
            $table->string('endpoint');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_routes');
    }
};
