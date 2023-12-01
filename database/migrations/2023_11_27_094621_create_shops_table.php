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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('description');
            $table->string('phone_number');
            $table->string('city');
            $table->text('policies')->nullable();
            $table->text('shipping')->nullable();
            $table->enum('payment_options',['visa', 'master', 'paypal', 'other'])->nullable();
            $table->text('cancellation')->nullable();
            $table->text('returns')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
