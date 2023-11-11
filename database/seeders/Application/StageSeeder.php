<?php

namespace Database\Seeders\Application;

use App\Models\Application\College;
use App\Models\Application\Material;
use App\Models\Application\Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stage::factory()
            // This tells the factory to create a relationship
            ->has(College::factory())
            ->has(Material::factory())
            ->count(10)
            ->create();
    }
}
