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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();

            $table->boolean('premium')->default(false);
            $table->integer('double_beds')->default(0);
            $table->integer('single_beds')->default(0);
            $table->integer('kids_beds')->default(0);
            $table->integer('adults')->default(0);
            $table->integer('kids')->default(0);
            $table->integer('price');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
