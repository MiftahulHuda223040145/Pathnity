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
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->string('username')->nullable()->unique();
            $table->string('phone_number');
            $table->string('website');
            $table->string('position');
            $table->date('tax_id')->nullable();
            $table->String('address');
            $table->String('email');
            $table->String('password');
            $table->string('avatar')->nullable();
            $table->string('role')->default('organizer');
            $table->timestamp('email_verified_at')->nullable()->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('organizer_password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('organizer_sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('organizer_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('organizer_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizers');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
