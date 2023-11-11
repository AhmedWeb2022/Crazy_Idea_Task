<?php

namespace Database\Factories\Application;

use App\Models\Application\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application\College>
 */
class CollegeFactory extends Factory
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
            "location" => fake()->title(),
            "university_id" => University::all()->random()->id,
        ];
    }
}
