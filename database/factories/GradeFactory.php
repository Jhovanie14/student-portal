<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = ['Math', 'Science', 'English', 'History', 'Geography'];

        return [
            'user_id' => User::factory(), // Assuming User factory exists
            'subject' => $this->faker->randomElement($subjects),
            'grade' => $this->faker->numberBetween(75, 99),
        ];
    }
}
