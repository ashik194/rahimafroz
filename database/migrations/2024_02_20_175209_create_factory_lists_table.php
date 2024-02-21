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
        Schema::create('factory_lists', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('image_alt')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('factory_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factory_lists');
    }
};
