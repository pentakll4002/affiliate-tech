<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // [timestamp]_create_article_interactions_table.php
public function up()
{
    Schema::create('article_interactions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('article_id')->constrained()->onDelete('cascade');
        $table->enum('type', ['like', 'dislike', 'share']);
        $table->timestamps();
        
        $table->unique(['user_id', 'article_id', 'type']);
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_interactions');
    }

    
};
