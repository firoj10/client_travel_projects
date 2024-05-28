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
        Schema::create('stays', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('star_rating')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('short_description')->nullable();
            $table->string('thumbnail_image_link')->nullable();
            $table->text('gallery_images_link')->nullable();
            $table->text('overview_description')->nullable();
            $table->text('accommodation_description')->nullable();
            $table->text('spa_and_wellness_description')->nullable();
            $table->text('activities_and_facilities_description')->nullable();
            $table->boolean('status')->default(true);
            $table->enum('stay_type', ['hotel', 'resort', 'guest_house']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stays');
    }
};
