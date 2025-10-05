<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentAchievement;

class StudentAchievementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = [
            [
                'title' => 'National Programming Competition Winner',
                'description' => 'Our students won first place in the national programming competition, demonstrating exceptional coding skills and problem-solving abilities.',
                'image' => 'images/student-achievements/programming_competition.jpg',
                'link' => 'https://example.com/programming-competition',
                'date' => now()->subMonths(3),
                'sort_order' => 1
            ],
            [
                'title' => 'Best Project Award at University Expo',
                'description' => 'Students received the Best Project Award for their innovative software solution at the annual university expo.',
                'image' => 'images/student-achievements/university_expo.jpg',
                'link' => 'https://example.com/university-expo',
                'date' => now()->subMonths(6),
                'sort_order' => 2
            ],
            [
                'title' => 'Internship Excellence Recognition',
                'description' => 'Several students were recognized by leading tech companies for their outstanding performance during internships.',
                'image' => 'images/student-achievements/internship.jpg',
                'link' => 'https://example.com/internship-recognition',
                'date' => now()->subMonths(9),
                'sort_order' => 3
            ],
            [
                'title' => 'Research Publication in International Journal',
                'description' => 'Undergraduate students published their research on machine learning algorithms in an international journal.',
                'image' => 'images/student-achievements/research.jpg',
                'link' => 'https://example.com/research-publication',
                'date' => now()->subMonths(12),
                'sort_order' => 4
            ]
        ];

        foreach ($achievements as $achievement) {
            StudentAchievement::create($achievement);
        }
    }
}
