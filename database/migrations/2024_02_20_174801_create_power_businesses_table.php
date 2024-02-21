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
        Schema::create('power_businesses', function (Blueprint $table) {
            $table->id();
            $table->string('banner');
            $table->string('banner_alt')->nullable();
            $table->string('title');
            $table->text('description');
            $table->text('youtube_iframe')->nullable();
            $table->string('rspb_milstone')->nullable();
            $table->string('rspb_milstone_image')->nullable();
            $table->text('rspb_milstone_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('power_businesses');
    }
};
