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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_en');
            $table->string('photo')->nullable();
            $table->foreignId('news_category_id')->nullable()->constrained('news_categories')->cascadeOnDelete();
            $table->string('publisher');
            $table->string('publisher_en')->nullable();
            $table->string('date')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_en')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
