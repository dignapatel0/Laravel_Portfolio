<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_title' => $this->faker->jobTitle,
            'company_name' => $this->faker->company,
            'location' => $this->faker->city,
            'employment_type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Internship', 'Freelance']),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'user_id' => User::all()->random()->id, 
        ];
    }
}
