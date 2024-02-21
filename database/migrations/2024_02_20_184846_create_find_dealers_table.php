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
        Schema::create('find_dealers', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('image_alt')->nullable();
            $table->string('dealer_name')->nullable();
            $table->string('address')->nullable();
            $table->string('proprietor')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('find_dealers');
    }
};
