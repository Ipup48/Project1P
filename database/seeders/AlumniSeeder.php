<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumni;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumni = [
            [
                'name' => 'John Smith',
                'graduation_year' => '2020',
                'position' => 'Senior Software Engineer',
                'bio' => 'John graduated with honors and is now working at a leading tech company. He specializes in cloud architecture and has contributed to several open-source projects.',
                'image' => 'images/alumni/john_smith.jpg',
                'email' => 'john.smith@example.com',
                'linkedin' => 'https://linkedin.com/in/johnsmith',
                'company' => 'TechCorp Inc.',
                'sort_order' => 1
            ],
            [
                'name' => 'Sarah Johnson',
                'graduation_year' => '2019',
                'position' => 'Product Manager',
                'bio' => 'Sarah leads product development for a successful startup. She is passionate about user experience and has launched multiple successful products.',
                'image' => 'images/alumni/sarah_johnson.jpg',
                'email' => 'sarah.johnson@example.com',
                'linkedin' => 'https://linkedin.com/in/sarahjohnson',
                'company' => 'InnovateStart Ltd.',
                'sort_order' => 2
            ],
            [
                'name' => 'Michael Chen',
                'graduation_year' => '2021',
                'position' => 'Data Scientist',
                'bio' => 'Michael works in the field of artificial intelligence and machine learning. He has published several papers and is a regular speaker at tech conferences.',
                'image' => 'images/alumni/michael_chen.jpg',
                'email' => 'michael.chen@example.com',
                'linkedin' => 'https://linkedin.com/in/michaelchen',
                'company' => 'AI Solutions Co.',
                'sort_order' => 3
            ],
            [
                'name' => 'Emma Wilson',
                'graduation_year' => '2018',
                'position' => 'Cybersecurity Specialist',
                'bio' => 'Emma is a cybersecurity expert who helps organizations protect their digital assets. She has certifications in multiple security frameworks.',
                'image' => 'images/alumni/emma_wilson.jpg',
                'email' => 'emma.wilson@example.com',
                'linkedin' => 'https://linkedin.com/in/emmawilson',
                'company' => 'SecureNet Ltd.',
                'sort_order' => 4
            ]
        ];

        foreach ($alumni as $alumnus) {
            Alumni::create($alumnus);
        }
    }
}
