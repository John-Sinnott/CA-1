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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            // cascade means if drink is deleted so will the stocks
            $table->foreignId('drink_id')->constrained()->onDelete('cascade');
            // cascade - if user is deleted so are their revies
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('rating')->unsigned()->default(1); // rating from 1 - 5
            $table->text('comment')->nullable();
            $table->enum('stock_type', ['Single', 'Four Pack', 'Six Pack', 'Ten Pack', 'twelve pack'])->default('single');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
