<?php

namespace Database\Factories\Application;

use App\Models\Application\College;
use App\Models\Application\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application\Course>
 */
class CourseFactory extends Factory
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
            "academic" => fake()->boolean(),
            "basic" => fake()->boolean(),
            "paid" => fake()->boolean(),
        ];
    }
}
