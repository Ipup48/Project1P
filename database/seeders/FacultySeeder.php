<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculty = [
            [
                'name' => 'ผศ.ดร.อุษณีย์ ภักดีตระกูลวงศ์',
                'position' => 'ประธานฯ สาขาวิชา',
                'image' => 'images/faculty/1706694016_43d4f45dca2d4f9011a4.jpg',
                'description' => 'ประธานสาขาฯ ที่มีประสบการณ์ในการบริหารจัดการหลักสูตรและการวิจัยด้านวิศวกรรมซอฟต์แวร์ จบปริญญาเอกจากมหาวิทยาลัยชั้นนำในต่างประเทศ',
                'type' => 'faculty',
                'sort_order' => 1
            ],
            [
                'name' => 'ผศ.ดร. วรเชษฐ์ อุทธา',
                'position' => 'รองประธานสาขา (ประธานสาขา)',
                'image' => 'images/faculty/1706693986_c5a3e8541b6f087048fa.jpg',
                'description' => 'รองประธานสาขาฯ ที่เชี่ยวชาญด้านการพัฒนาแอปพลิเคชันมือถือและเทคโนโลยีเว็บ จบปริญญาเอกจากมหาวิทยาลัยชั้นนำในต่างประเทศ',
                'type' => 'faculty',
                'sort_order' => 2
            ],
            [
                'name' => 'ผศ.สมเกียรติ ช่อเหมือน',
                'position' => 'รองประธานฯ ฝ่ายนโยบายและแผน',
                'image' => 'images/faculty/1706694064_e094c4d933ac0ed7cd03.jpg',
                'description' => 'รองประธานฯ ฝ่ายนโยบายและแผน ที่มีความเชี่ยวชาญด้านการวางแผนหลักสูตรและการประเมินคุณภาพการศึกษา',
                'type' => 'faculty',
                'sort_order' => 3
            ],
            [
                'name' => 'ผศ.นฤพล สุวรรณวิจิตร',
                'position' => 'รองประธานฯ ฝ่ายประกันคุณภาพฯ',
                'image' => 'images/faculty/1716485261_38d6e57b8d63fe377d25.jpg',
                'description' => 'รองประธานฯ ฝ่ายประกันคุณภาพฯ ที่มีประสบการณ์ในการประกันคุณภาพการศึกษาและมาตรฐานสากล',
                'type' => 'faculty',
                'sort_order' => 4
            ],
            [
                'name' => 'อาจารย์ ดร.สุพิฌาย์ จันทร์เรือง',
                'position' => 'รองประธานฯ ฝ่ายกิจการนักศึกษา',
                'image' => 'images/faculty/1706694139_d6a2ba899f7470f5fd45.png',
                'description' => 'รองประธานฯ ฝ่ายกิจการนักศึกษา ที่มีความเชี่ยวชาญด้านการพัฒนาทักษะของนักศึกษาและการจัดกิจกรรมเพื่อส่งเสริมการเรียนรู้',
                'type' => 'faculty',
                'sort_order' => 5
            ],
            [
                'name' => 'อาจารย์สมหมาย กรังพานิช',
                'position' => 'กรรมการผู้จัดการ บริษัท พี เอ็น พี โซลูชั่น จำกัด, กรรมการสมาคมอุตสาหกรรมชอฟต์แวร์ไทย',
                'image' => 'images/faculty/1706697016_17296e0d4cca0c92558f.jpg',
                'description' => 'อาจารย์พิเศษที่มีประสบการณ์ตรงจากภาคอุตสาหกรรม สามารถถ่ายทอดความรู้และประสบการณ์จริงให้กับนักศึกษา',
                'type' => 'special',
                'sort_order' => 1
            ]
        ];

        foreach ($faculty as $member) {
            Faculty::create($member);
        }
    }
}