<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_title' => ucwords($this->faker->word()),
            'ship_type' => $this->faker->word(5),
            'salary' => $this->faker->numberBetween(200,10000),
            'contract_in_months' => $this->faker->numberBetween(6, 24),
            'requirement' => $this->faker->paragraph(),
        ];
    }
}
