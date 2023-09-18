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
        Schema::create('restaurants_typologies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurants_id');
            $table->foreign('restaurants_id')->references('id')->on('restaurants');

            $table->unsignedBigInteger('typologies_id');
            $table->foreign('typologies_id')->references('id')->on('typologies');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants_typologies');
    }
};
