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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');
            $table->String('name')->nullable();
            $table->String('email')->nullable();
            $table->String('address')->nullable();
            $table->String('phone')->nullable();
            $table->String('courier')->nullable();
            $table->String('payment')->default('MIDTRANS');
            $table->String('payment_url')->nullable();
            $table->bigInteger('total_price')->default(0);
            $table->String('status')->default('PENDING');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};