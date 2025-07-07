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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->text('description');
            $table->string('category'); // e.g., "Test Fixtures", "PCB Tools"
            $table->string('image_url');
            $table->string('spec_sheet_url')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->boolean('is_featured')->default(false);
            $table->json('specifications')->nullable(); // JSON field for tech specs
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
