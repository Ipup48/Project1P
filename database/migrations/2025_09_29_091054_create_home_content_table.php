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
        Schema::create('home_content', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('section'); // banner, general_info, careers, faculty, special_faculty, laboratories, activities
            $table->string('image')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('list_items')->nullable(); // JSON encoded list items
            $table->string('link')->nullable();
            $table->string('link_text')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_content');
    }
};
