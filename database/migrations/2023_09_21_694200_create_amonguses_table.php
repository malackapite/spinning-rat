<?php

use App\Models\Amongus;
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
        Schema::create('amonguses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->foreignId('role_id')->references('id')->on('roles');
            $table->timestamps();
        });
        Amongus::create([
            'name' => 'Red sus',
            'color' => 'Red',
            'role' => 2
        ]);
        Amongus::create([
            'name' => 'Sussy baka',
            'color' => 'Green',
            'role' => 2
        ]);
        Amongus::create([
            'name' => 'Orang',
            'color' => 'Orange',
            'role' => 1
        ]);
        Amongus::create([
            'name' => 'Sussi baki',
            'color' => 'Pink',
            'role' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amonguses');
    }
};
