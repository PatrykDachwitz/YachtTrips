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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('number')->unique()->nullable();
            $table->integer('payment_id')->nullable();
            $table->string('payment_number')->nullable();
            $table->integer('status_id')->default(1);
            $table->dropColumn('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('number');
            $table->dropColumn('payment_id');
            $table->dropColumn('payment_number');
            $table->dropColumn('status_id');
            $table->integer('status')->default(1)->change();
        });
    }
};
