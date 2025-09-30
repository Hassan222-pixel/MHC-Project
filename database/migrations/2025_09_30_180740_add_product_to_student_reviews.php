<?php

// database/migrations/xxxx_xx_xx_add_product_to_student_reviews.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('student_reviews', function (Blueprint $table) {
            $table->foreignId('product_id')
                ->nullable()
                ->constrained('products')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('student_reviews', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropColumn('product_id');
        });
    }
};
