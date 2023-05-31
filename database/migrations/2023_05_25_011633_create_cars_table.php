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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->string('description');
            $table->string('color');
            $table->string('license_plate');
            $table->string('photo')->nullable();
            $table->string('year');
            $table->string('tariff');
            $table->integer('doors');
            $table->integer('luggages');
            $table->integer('seats');
            $table->enum('transmission', ['manual', 'automatic'])->default('manual');
            $table->enum('size', ['small', 'medium', 'large'])->default('medium');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
