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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });



        DB::table('types')->insert([
            ['name' => 'Tipus1', 'description' => 'leiras1'],
            ['name' => 'Tipus2', 'description' => 'leiras2'],
            ['name' => 'Tipus3', 'description' => 'leiras3'],
            ['name' => 'Tipus4', 'description' => 'leiras4'],
            ['name' => 'Tipus5', 'description' => 'leiras5'],
        ]);
    }
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
