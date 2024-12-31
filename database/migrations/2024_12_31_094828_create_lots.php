<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->integer('price');
            $table->integer('stock_quantity');
            $table->string('description');
            $table->timestamps();
        });
        DB::table('lots')->insert([
            ['name' => 'Wireless Mouse', 'category' => 'Electronics', 'price' => 25.00, 'stock_quantity' => 150, 'description' => 'A smooth and ergonomic wireless mouse.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gaming Keyboard', 'category' => 'Electronics', 'price' => 55.00, 'stock_quantity' => 100, 'description' => 'RGB mechanical keyboard for gaming.', 'created_at' => now(), 'updated_at' => now()],
            
        ]);
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lots');
    }
};
