<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_name' => $this->faker->word,
            'location' => $this->faker->word,
            'start_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'end_date' => $this->faker->dateTimeBetween('+1 year', '+2 years')->format('Y-m-d'),
            'project_manager' => $this->faker->name,
            'status' => rand(1, 2),
        ];
    }
}
