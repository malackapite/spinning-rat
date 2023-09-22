<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DoingTask>
 */
class DoingTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "amongus_id" => random_int(1, 4),
            "task_id" => random_int(1, 19),
            "is_done" => random_int(0, 1)==1
        ];
    }
}
