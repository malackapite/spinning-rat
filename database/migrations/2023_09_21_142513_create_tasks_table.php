<?php

use App\Models\Task;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });
        Task::create(["name" => "Align Engine Output"]); 
        Task::create(["name" => "Calibrate Distributor"]); 
        Task::create(["name" => "Chart Course"]); 
        Task::create(["name" => "Clean O2 Filter"]); 
        Task::create(["name" => "Clean Vent"]); 
        Task::create(["name" => "Clear Asteroids"]); 
        Task::create(["name" => "Divert Power"]); 
        Task::create(["name" => "Empty Chute"]); 
        Task::create(["name" => "Empty Garbage"]); 
        Task::create(["name" => "Fix Wiring"]); 
        Task::create(["name" => "Fuel Engines"]); 
        Task::create(["name" => "Inspect Sample"]); 
        Task::create(["name" => "Prime Shields"]); 
        Task::create(["name" => "Stabilize Steering"]); 
        Task::create(["name" => "Start Reactor"]); 
        Task::create(["name" => "Submit Scan"]); 
        Task::create(["name" => "Swipe Card"]); 
        Task::create(["name" => "Unlock Manifolds"]); 
        Task::create(["name" => "Upload Data"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
