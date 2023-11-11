<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Application\College;
use App\Models\Application\Course;
use App\Models\Application\Material;
use App\Models\Application\Stage;
use App\Models\Application\University;
use App\Models\Users\Center;
use App\Models\Users\Student;
use App\Models\Users\Teacher;
use Database\Seeders\Application\CourseSeeder;
use Database\Seeders\Application\StageSeeder;
use Database\Seeders\Application\UniversitySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UniversitySeeder::class,
            CourseSeeder::class,
            StageSeeder::class,
        ]);
    }
}
