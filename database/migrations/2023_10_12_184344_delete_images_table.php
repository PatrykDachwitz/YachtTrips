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
        Schema::dropIfExists('images');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('location', 255);
            $table->integer("type_image")->nullable();
            $table->string('devices', 50)->default("pc");
            $table->softDeletes();
        });

    }
};
