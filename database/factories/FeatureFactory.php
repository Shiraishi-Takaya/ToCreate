<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Work;

class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'work_id' => Work::factory(),
            'name' => $this->faker->realText(10),
            'comment' => $this->faker->realText(20),
            'is_done' => false
        ];
    }
}
