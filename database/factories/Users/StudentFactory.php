<?php

namespace Database\Factories\Users;

use App\Models\Application\College;
use App\Models\Application\University;
use App\Models\Users\Center;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "phone" => fake()->phoneNumber(),
            "age" => fake()->numberBetween(1, 50),
            "academic" => fake()->boolean(),
            "basic" => fake()->boolean(),
            "center_id" => Center::all()->random()->id,
            "university_id" =>University::all()->random()->id,
            "college_id"=> College::all()->random()->id
        ];
    }
}
