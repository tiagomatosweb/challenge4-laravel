<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'name' => 'Laravel API',
                'ranking' => 1,
            ],
            [
                'name' => 'Mastering query builder',
                'ranking' => 2,
            ],
            [
                'name' => 'Formulário e validação',
                'ranking' => 3,
            ],
            [
                'name' => 'Engenharia blade template',
                'ranking' => 4,
            ],
            [
                'name' => 'Seeding e factories na prática',
                'ranking' => 5,
            ],
        ];
        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
