<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user only if it doesn't exist
        User::firstOrCreate([
            'email' => 'test@example.com'
        ], [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        // Create admin user
        $this->call(AdminUserSeeder::class);
        
        // Seed all content with complete data and images
        $this->call([
            NewsEventsSeeder::class,
            FacultySeeder::class,
            AboutContentSeeder::class,
            CoursesContentSeeder::class,
            HomeContentSeeder::class,
            ContactContentSeeder::class,
            FacultyAchievementsSeeder::class,
            StudentAchievementsSeeder::class,
            AlumniSeeder::class,
            VideosSeeder::class
        ]);
    }
}