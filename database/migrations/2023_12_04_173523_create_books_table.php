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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('trip_id');
            $table->integer('order_id');
            $table->integer('number_room');
            $table->integer('count_adult')->default(1);
            $table->integer('count_kids')->default(0);
            $table->integer('double_beds')->default(0);
            $table->integer('single_Beds')->default(1);
            $table->integer('kids_beds')->default(0);
            $table->integer('price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
