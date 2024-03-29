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
            $table->string('title')->default('');
        $table->text('description')->default('');
        $table->unsignedBigInteger('author_id');
        $table->unsignedBigInteger('category_id');
        $table->decimal('price', 8, 2)->nullable();
        $table->integer('stock')->default(0);
        $table->timestamps();

        
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
