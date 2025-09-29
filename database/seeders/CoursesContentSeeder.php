<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CoursesContent;

class CoursesContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coursesContent = [
            [
                'title' => 'ข้อมูลทั่วไป',
                'content' => null,
                'section' => 'general_info',
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
                'year' => null,
                'sort_order' => 1
            ],
            [
                'title' => 'โครงสร้างหลักสูตร',
                'content' => 'หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิศวกรรมซอฟต์แวร์ เป็นหลักสูตร 4 ปี ประกอบด้วย 128 หน่วยกิต หลักสูตรออกแบบมาเพื่อให้นักศึกษามีพื้นฐานที่มั่นคงในวิทยาการคอมพิวเตอร์และความรู้เฉพาะทางด้านวิศวกรรมซอฟต์แวร์',
                'section' => 'structure',
                'subtitle' => 'ข้อกำหนดของปริญญา',
                'list_items' => json_encode([
                    'หน่วยกิตรวม: 128 หน่วยกิต',
                    'รายวิชาศึกษาทั่วไป: 30 หน่วยกิต',
                    'รายวิชาแกนหลักด้านวิศวกรรมซอฟต์แวร์: 84 หน่วยกิต',
                    'รายวิชาเลือก: 12 หน่วยกิต',
                    'การฝึกงานสหกิจศึกษา: 12 หน่วยกิต'
                ]),
                'year' => null,
                'sort_order' => 2
            ],
            [
                'title' => 'อาชีพหลังสำเร็จการศึกษา',
                'content' => null,
                'section' => 'careers',
                'subtitle' => null,
                'list_items' => null,
                'year' => null,
                'sort_order' => 3
            ],
            [
                'title' => 'รายวิชาแกน',
                'content' => null,
                'section' => 'core_subjects',
                'subtitle' => 'ปีที่ 1',
                'list_items' => json_encode([
                    'การเขียนโปรแกรมเบื้องต้น',
                    'ระบบคอมพิวเตอร์พื้นฐาน',
                    'แคลคูลัส I & II',
                    'ฟิสิกส์สำหรับวิศวกร'
                ]),
                'year' => 1,
                'sort_order' => 4
            ],
            [
                'title' => 'รายวิชาแกน',
                'content' => null,
                'section' => 'core_subjects',
                'subtitle' => 'ปีที่ 2',
                'list_items' => json_encode([
                    'โครงสร้างข้อมูลและอัลกอริธึม',
                    'การเขียนโปรแกรมเชิงวัตถุ',
                    'ระบบฐานข้อมูล',
                    'พื้นฐานวิศวกรรมซอฟต์แวร์'
                ]),
                'year' => 2,
                'sort_order' => 5
            ],
            [
                'title' => 'รายวิชาแกน',
                'content' => null,
                'section' => 'core_subjects',
                'subtitle' => 'ปีที่ 3',
                'list_items' => json_encode([
                    'การออกแบบและสถาปัตยกรรมซอฟต์แวร์',
                    'การพัฒนาแอปพลิเคชันเว็บ',
                    'การทดสอบและประกันคุณภาพซอฟต์แวร์',
                    'การจัดการโครงการ'
                ]),
                'year' => 3,
                'sort_order' => 6
            ],
            [
                'title' => 'รายวิชาแกน',
                'content' => null,
                'section' => 'core_subjects',
                'subtitle' => 'ปีที่ 4',
                'list_items' => json_encode([
                    'วิศวกรรมความต้องการซอฟต์แวร์',
                    'การพัฒนาแอปพลิเคชันมือถือ',
                    'ความปลอดภัยของซอฟต์แวร์',
                    'โครงการจบ'
                ]),
                'year' => 4,
                'sort_order' => 7
            ],
            [
                'title' => 'ทางเลือกเฉพาะทาง',
                'content' => 'ในปีสุดท้าย นักศึกษาสามารถเลือกทางเลือกเฉพาะทางเพื่อเน้นการศึกษา:',
                'section' => 'specializations',
                'subtitle' => 'ปัญญาประดิษฐ์',
                'list_items' => json_encode([
                    'เน้นด้าน Machine Learning, Neural Networks และการพัฒนาระบบอัจฉริยะ'
                ]),
                'year' => null,
                'sort_order' => 8
            ],
            [
                'title' => 'ทางเลือกเฉพาะทาง',
                'content' => null,
                'section' => 'specializations',
                'subtitle' => 'การพัฒนาเว็บและมือถือ',
                'list_items' => json_encode([
                    'เชี่ยวชาญในการพัฒนาเว็บแบบ Full-stack และแอปพลิเคชันมือถือข้ามแพลตฟอร์ม'
                ]),
                'year' => null,
                'sort_order' => 9
            ],
            [
                'title' => 'ทางเลือกเฉพาะทาง',
                'content' => null,
                'section' => 'specializations',
                'subtitle' => 'ความปลอดภัยไซเบอร์',
                'list_items' => json_encode([
                    'เน้นด้านการพัฒนาซอฟต์แวร์ที่ปลอดภัยและหลักการความปลอดภัยของข้อมูล'
                ]),
                'year' => null,
                'sort_order' => 10
            ],
            [
                'title' => 'รายวิชาเลือก',
                'content' => 'นักศึกษาสามารถเลือกรายวิชาเลือกได้หลากหลายเพื่อปรับแต่งการศึกษา:',
                'section' => 'electives',
                'subtitle' => null,
                'list_items' => json_encode([
                    'การพัฒนาเกม',
                    'การประมวลผลบนคลาวด์',
                    'วิทยาการข้อมูลและการวิเคราะห์',
                    'การออกแบบประสบการณ์ผู้ใช้',
                    'DevOps และ Continuous Integration',
                    'เทคโนโลยี Blockchain'
                ]),
                'year' => null,
                'sort_order' => 11
            ]
        ];

        foreach ($coursesContent as $content) {
            CoursesContent::create($content);
        }
    }
}
