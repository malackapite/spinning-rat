<?php

use App\Models\DoingTask;
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
        Schema::create('doing_tasks', function (Blueprint $table) {
            //$table->id();
            $table->foreignId("amongus_id")->references("id")->on("amonguses");
            $table->foreignId("task_id")->references("id")->on("tasks");
            $table->primary(["amongus_id","task_id"]);
            $table->boolean("is_done");
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doing_tasks');
    }
};
