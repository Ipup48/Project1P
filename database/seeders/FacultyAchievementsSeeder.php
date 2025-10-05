<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FacultyAchievement;
use App\Models\Faculty;

class FacultyAchievementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all faculty members
        $faculties = Faculty::all();
        
        if ($faculties->count() > 0) {
            foreach ($faculties as $faculty) {
                // Create 2-3 achievements for each faculty member
                for ($i = 1; $i <= rand(2, 3); $i++) {
                    FacultyAchievement::create([
                        'faculty_id' => $faculty->id,
                        'title' => 'Achievement ' . $i . ' for ' . $faculty->name,
                        'description' => 'This is a sample achievement description for ' . $faculty->name . '. This achievement was awarded in recognition of outstanding contributions to the field.',
                        'image' => 'images/faculty/achievements/' . $faculty->id . '_' . $i . '.jpg',
                        'link' => 'https://example.com/achievement/' . $faculty->id . '/' . $i,
                        'date' => now()->subMonths(rand(1, 24)),
                        'sort_order' => $i
                    ]);
                }
            }
        }
    }
}
