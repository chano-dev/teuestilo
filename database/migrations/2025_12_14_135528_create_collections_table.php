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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('name', 150);
            $table->string('slug', 150)->unique();
            $table->text('description')->nullable();

            // Season
            $table->year('year');
            $table->enum('season', ['spring_summer', 'fall_winter', 'all_year', 'special'])->default('all_year');

            // Dates
            $table->date('launch_date')->nullable();
            $table->date('end_date')->nullable();

            // Image
            $table->string('image_path', 255)->nullable();

            // Organization
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('display_order')->default(0);

            // SEO
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();

            $table->timestamps();

            // Indexes
            $table->index(['year', 'season']);
            $table->index(['is_active', 'is_featured']);
            $table->index(['launch_date', 'end_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
