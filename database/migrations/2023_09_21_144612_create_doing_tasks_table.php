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
        Schema::create('doing_tasks', function (Blueprint $table) {
            $table->integer("amongus_id");
            $table->integer("task_id");
            $table->primary(["amongus_id","task_id"]);
            $table->foreignId("amongus_id")->references("id")->on("amongus");
            $table->foreignId("task_id")->references("id")->on("task");
            $table->boolean("is_done");
            //$table->timestamps();
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
