<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeContent;

class HomeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homeContent = [
            [
                'title' => 'สาขาวิชาวิศวกรรมซอฟต์แวร์',
                'content' => null,
                'section' => 'banner',
                'image' => 'images/banner/1693382011_2c0ee9d91d20a0202d5f.jpg',
                'subtitle' => null,
                'list_items' => null,
                'link' => null,
                'link_text' => null,
                'sort_order' => 1
            ],
            [
                'title' => 'ข้อมูลทั่วไป',
                'content' => null,
                'section' => 'general_info',
                'image' => null,
                'subtitle' => null,
                'list_items' => json_encode([
                    'ชื่อปริญญาไทย: วิทยาศาสตรบัณฑิต (วิศวกรรมซอฟต์แวร์)',
                    'ชื่อปริญญาอังกฤษ: Bachelor of Science (Software Engineering) (B.Sc.)',
                    'รูปแบบหลักสูตร: ระดับปริญญาตรี หลักสูตร 4 ปี',
                    'หน่วยกิต: ไม่น้อยกว่า 128 หน่วยกิต',
                    'ภาษาที่ใช้: ไทย/Thai/泰语 (Tàiyǔ)',
                    'ค่าเรียน: 11,400 บาท/เทอม',
                    'หลักสูตรปรับปรุง: พ.ศ. 2564'
                ]),
                'link' => 'https://sc.npru.ac.th/sc_major/./assets/attachs/major/1706694468_47edd5cc1ed73615518c.pdf',
                'link_text' => 'ดาวน์โหลดรายละเอียดหลักสูตร',
                'sort_order' => 2
            ],
            [
                'title' => 'อาชีพหลังสำเร็จการศึกษา',
                'content' => null,
                'section' => 'careers',
                'image' => null,
                'subtitle' => null,
                'list_items' => null,
                'link' => null,
                'link_text' => null,
                'sort_order' => 3
            ],
            [
                'title' => 'อาจารย์ประจำหลักสูตร',
                'content' => null,
                'section' => 'faculty',
                'image' => null,
                'subtitle' => null,
                'list_items' => null,
                'link' => null,
                'link_text' => null,
                'sort_order' => 4
            ],
            [
                'title' => 'อาจารย์พิเศษและนักวิจัย',
                'content' => null,
                'section' => 'special_faculty',
                'image' => null,
                'subtitle' => null,
                'list_items' => null,
                'link' => null,
                'link_text' => null,
                'sort_order' => 5
            ],
            [
                'title' => 'ห้องปฏิบัติการ',
                'content' => null,
                'section' => 'laboratories',
                'image' => null,
                'subtitle' => null,
                'list_items' => null,
                'link' => null,
                'link_text' => null,
                'sort_order' => 6
            ],
            [
                'title' => 'กิจกรรมเด่น',
                'content' => null,
                'section' => 'activities',
                'image' => null,
                'subtitle' => null,
                'list_items' => null,
                'link' => null,
                'link_text' => null,
                'sort_order' => 7
            ]
        ];

        foreach ($homeContent as $content) {
            HomeContent::create($content);
        }
    }
}
