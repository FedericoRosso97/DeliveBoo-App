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
        Schema::create('user_restaurants', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('name')->required();
            $table->string('address')->required();
            $table->integer('VAT_number')->required();
            $table->string('email')->unique();
            $table->float('opening_time')->required();
            $table->string('image');
            $table->string('telephone_number');
            $table->float('vote');

            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_restaurants');
    }
};
