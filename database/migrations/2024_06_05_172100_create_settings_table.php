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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('office_name')->nullable();
            $table->string('office_name_en')->nullable();;
            $table->string('address')->nullable();
            $table->string('address_en')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('flag')->nullable();
            $table->string( 'background_img')->nullable();
            $table->foreignId('information_officer_id')->nullable()->constrained('employees')->cascadeOnDelete();
            $table->foreignId('office_head_id')->nullable()->constrained('employees')->cascadeOnDelete();
            $table->foreignId('spoke_person_id')->nullable()->constrained('employees')->cascadeOnDelete();
            $table->string('map_iframe')->nullable();
            $table->string('facebook_iframe')->nullable();
            $table->string('twitter_iframe')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
