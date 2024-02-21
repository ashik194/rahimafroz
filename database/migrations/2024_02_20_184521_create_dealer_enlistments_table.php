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
        Schema::create('dealer_enlistments', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->string('banner_alt')->nullable();
            $table->string('full_name');
            $table->string('company_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('district')->nullable();
            $table->string('thana')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('captcha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealer_enlistments');
    }
};
