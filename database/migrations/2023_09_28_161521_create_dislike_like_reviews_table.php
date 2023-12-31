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
        Schema::create('dislike_like_reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable() ;
            $table->foreignId('user_id');
            $table->foreignId('review_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dislike_like_reviews');
    }
};
