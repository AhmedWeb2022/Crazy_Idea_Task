<?php

namespace Database\Factories\Application;

use App\Models\Application\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application\Material>
 */
class MaterialFactory extends Factory
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
            "course_id" => Course::all()->random()->id,
        ];
    }
}
