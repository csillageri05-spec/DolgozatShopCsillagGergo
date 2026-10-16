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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('types')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });


        DB::table('products')->insert([
            ['type_id' => 1, 'name' => 'Termek1', 'description' => 'leiras1', 'price' => 1500],
            ['type_id' => 2, 'name' => 'Termek2', 'description' => 'leiras2', 'price' => 2500],
            ['type_id' => 3, 'name' => 'Termek3', 'description' => 'leiras3', 'price' => 3500],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
