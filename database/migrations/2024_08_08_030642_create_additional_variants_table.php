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
        Schema::create('additional_variants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('additional_id');
            $table->unsignedBigInteger('variant_id');
            $table->timestamps();

            $table->foreign('additional_id')->references('id')->on('additionals')->onDelete('cascade');
            $table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade');

            $table->unique(['additional_id', 'variant_id']); // Menambahkan unique constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_variants');
    }
};
