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
        Schema::create('bastket', function (Blueprint $table) {
            $table->id();
            $table->dateTime('time');
            $table->foreignId('product_Id');
            $table->foreignId('users_id');
            $table->timestamps();
        });


        DB::table('bastket')->insert([
            ['time' => now(), 'product_id' => '1', 'user_id' => 1],
            ['time' => now(), 'product_id' => '2', 'user_id' => 2],
            ['time' => now(), 'product_id' => '3', 'user_id' => 3],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bastket');
    }
};
