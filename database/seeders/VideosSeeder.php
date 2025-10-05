<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            [
                'title' => 'Introduction to Software Engineering',
                'description' => 'An overview of our software engineering program and what students can expect to learn.',
                'youtube_link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'image' => 'images/videos/se_intro.jpg',
                'is_primary' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Student Projects Showcase',
                'description' => 'See some of the amazing projects our students have created throughout their studies.',
                'youtube_link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'image' => 'images/videos/projects.jpg',
                'is_primary' => false,
                'sort_order' => 2
            ],
            [
                'title' => 'Faculty Interview Series',
                'description' => 'Get to know our faculty members and their research interests in this interview series.',
                'youtube_link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'image' => 'images/videos/faculty_interview.jpg',
                'is_primary' => false,
                'sort_order' => 3
            ],
            [
                'title' => 'Campus Tour',
                'description' => 'Take a virtual tour of our campus and facilities.',
                'youtube_link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'image' => 'images/videos/campus_tour.jpg',
                'is_primary' => false,
                'sort_order' => 4
            ]
        ];

        foreach ($videos as $video) {
            Video::create($video);
        }
    }
}
