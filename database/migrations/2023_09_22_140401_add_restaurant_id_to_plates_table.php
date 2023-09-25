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
        Schema::table('plates', function (Blueprint $table) {
            //

            $table->unsignedBigInteger('restaurant_id')->after('id')->nullable();

            $table->foreign('restaurant_id')
                //->references('user_id')
                ->references('id')//prova da cancellare poi,se non funziona
                ->on('restaurants')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plates', function (Blueprint $table) {
            //

            $table->dropForeign('plates_restaurant_id_foreign');

            $table->dropColumn('restaurant_id');
        });
    }
};

