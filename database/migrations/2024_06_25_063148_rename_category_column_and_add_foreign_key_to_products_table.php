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
        // Schema::table('products', function (Blueprint $table) {
        //     // Rename existing column 'category' to 'category_ID'
        //     $table->renameColumn('category', 'category_ID');

        //     // Add foreign key constraint
        //     $table->foreign('category_ID')
        //           ->references('id')
        //           ->on('categories')
        //           ->onDelete('cascade'); // Optional: cascade delete
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
