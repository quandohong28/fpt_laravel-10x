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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('content');
            $table->string('image_caption')->nullable();
            $table->date('publication');
            $table->string('publisher');
            $table->integer('is_active')->default(1)->comment('0: Inactive, 1: Active');
            $table->integer('is_featured')->default(0)->comment('0: Not Featured, 1: Featured');
            $table->integer('view')->default(0);
            $table->integer('like')->default(0);
            $table->foreignId('category_id')->constrained();
            $table->foreignId('hastag_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
