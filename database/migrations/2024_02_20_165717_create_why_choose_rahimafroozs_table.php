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
        Schema::create('why_choose_rahimafroozs', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('image_alt')->nullable();
            $table->string('title')->nullable();
            $table->string('short_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_rahimafroozs');
    }
};
