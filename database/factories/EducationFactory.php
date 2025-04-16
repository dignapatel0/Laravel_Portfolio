<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'institution_name' => $this->faker->company . ' University',
            'course_name' => $this->faker->words(3, true),
            'location' => $this->faker->city,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
