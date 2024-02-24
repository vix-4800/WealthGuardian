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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('admin')->default(false);
            $table->foreignId('subscription_plan_id')->default(1)->nullable()->constrained('subscription_plans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('family_id')->nullable()->constrained('families')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('organization_id')->nullable()->constrained('organizations')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('google_id')->nullable();
            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
