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
        Schema::create('systems', function (Blueprint $table) {
            $table->id();
            $table->string('header_logo')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('office_address')->nullable();
            $table->string('years_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('copyright_text')->nullable();
            $table->text('footer_short_desc')->nullable();
            $table->string('about_title')->nullable();
            $table->text('about_desc')->nullable();
            $table->string('buy_now_url')->nullable();
            $table->string('video')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('youtube_video')->nullable();
            $table->string('facebook_page')->nullable();
            $table->string('instagram_page')->nullable();
            $table->string('linkedin_page')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('systems');
    }
};
