<?php

namespace Database\Seeders\Application;

use App\Models\Application\University;
use App\Models\Users\Center;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        University::factory()
            ->has(Center::factory())
            ->count(10)
            ->create();
    }
}
