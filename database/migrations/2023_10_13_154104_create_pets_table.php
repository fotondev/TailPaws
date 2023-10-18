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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('breed');
            $table->string('color');
            $table->string('gender');
            $table->string('age');
            $table->string('weight');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('status');
            $table->boolean('vaccinated');
            $table->string('pet_condition');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
