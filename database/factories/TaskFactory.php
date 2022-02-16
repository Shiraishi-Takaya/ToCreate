<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Feature;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'feature_id' => Feature::factory(),
            'name' => $this->faker->realText(10),
            'type' => true,
            'deadline' => $this->faker->date($format="Y-m-d", $max="now"),
            'is_done' => false
        ];
    }
}
