<?php

namespace Database\Seeders\Application;

use App\Models\Application\College;
use App\Models\Application\Course;
use App\Models\Application\Material;
use App\Models\Application\Stage;
use App\Models\Users\Student;
use App\Models\Users\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory()
            ->has(College::factory()->has(Stage::factory()->has(Material::factory())))
            ->has(Student::factory())
            ->has(Teacher::factory())
            ->count(10)
            ->create();
    }
}
