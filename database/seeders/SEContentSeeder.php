<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeContent;
use App\Models\AboutContent;
use App\Models\CoursesContent;
use App\Models\Faculty;
use App\Models\ContactContent;

class SEContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if data already exists to avoid duplication
        if (HomeContent::count() > 0 || AboutContent::count() > 0 || CoursesContent::count() > 0 || Faculty::count() > 0 || ContactContent::count() > 0) {
            // Data already exists, don't seed to avoid duplication
            return;
        }

        // Home Content
        HomeContent::create([
            'title' => 'สาขาวิชาวิศวกรรมซอฟต์แวร์',
            'content' => 'ยินดีต้อนรับสู่สาขาวิชาวิศวกรรมซอฟต์แวร์ มหาวิทยาลัยราชภัฏนครปฐม',
            'section' => 'hero',
            'subtitle' => 'Software Engineering Program',
            'list_items' => json_encode(['ปริญญาตรี 4 ปี', 'ปริญญาโท 2 ปี', 'หลักสูตรนานาชาติ']),
            'sort_order' => 1
        ]);

        HomeContent::create([
            'title' => 'ทำไมต้องเลือกเรา?',
            'content' => 'สาขาวิชาวิศวกรรมซอฟต์แวร์ มีความพร้อมทั้งด้านหลักสูตร บุคลากร และสิ่งอำนวยความสะดวกเพื่อรองรับการเรียนรู้ของนักศึกษา',
            'section' => 'features',
            'list_items' => json_encode(['หลักสูตรทันสมัย', 'อาจารย์ผู้เชี่ยวชาญ', 'ห้องปฏิบัติการทันสมัย', 'โอกาสฝึกงานในต่างประเทศ']),
            'sort_order' => 2
        ]);

        // About Content
        AboutContent::create([
            'title' => 'ภาพรวมของหลักสูตร',
            'content' => 'หลักสูตรวิศวกรรมซอฟต์แวร์ ระดับปริญญาตรี จัดทำขึ้นเพื่อผลิตบัณฑิตให้มีความรู้ ความสามารถ และทักษะที่เหมาะสมกับความต้องการของตลาดแรงงานในประเทศและต่างประเทศ',
            'section' => 'overview',
            'list_items' => json_encode(['ปริญญาตรี 4 ปี', 'TC-DC ร่วมกับสถาบันเทคโนโลยีแห่งเอเชีย', 'ฝึกงานในต่างประเทศ']),
            'sort_order' => 1
        ]);

        AboutContent::create([
            'title' => 'วิสัยทัศน์',
            'content' => 'เป็นผู้นำด้านการผลิตบัณฑิตและวิจัยด้านวิศวกรรมซอฟต์แวร์ที่มีคุณภาพในระดับนานาชาติ',
            'section' => 'vision',
            'sort_order' => 2
        ]);

        AboutContent::create([
            'title' => 'พันธกิจ',
            'content' => 'ผลิตบัณฑิตด้านวิศวกรรมซอฟต์แวร์ที่มีคุณภาพ สร้างองค์ความรู้และนวัตกรรมด้านวิศวกรรมซอฟต์แวร์ และสนับสนุนวิสาหกิจด้านเทคโนโลยีสารสนเทศ',
            'section' => 'mission',
            'sort_order' => 3
        ]);

        // Courses Content
        CoursesContent::create([
            'title' => 'โครงสร้างหลักสูตร',
            'content' => 'หลักสูตรวิศวกรรมซอฟต์แวร์ ระดับปริญญาตรี จำนวน 132 หน่วยกิต',
            'section' => 'overview',
            'list_items' => json_encode(['วิชาศึกษาทั่วไป 30 หน่วยกิต', 'วิชาเฉพาะด้าน 96 หน่วยกิต', 'วิชาเลือกเสรี 6 หน่วยกิต']),
            'sort_order' => 1
        ]);

        CoursesContent::create([
            'title' => 'วิชาบังคับ',
            'content' => 'วิชาบังคับที่นักศึกษาต้องศึกษาให้ผ่านตามหลักสูตร',
            'section' => 'curriculum',
            'list_items' => json_encode(['การเขียนโปรแกรมคอมพิวเตอร์', 'โครงสร้างข้อมูลและอัลกอริทึม', 'วิศวกรรมซอฟต์แวร์', 'ระบบฐานข้อมูล', 'ระบบปฏิบัติการ']),
            'sort_order' => 2
        ]);

        // Faculty
        Faculty::create([
            'name' => 'ดร. สมชาย ใจดี',
            'position' => 'หัวหน้าสาขา',
            'description' => 'ผู้เชี่ยวชาญด้านวิศวกรรมซอฟต์แวร์ มีประสบการณ์การสอนมากกว่า 10 ปี',
            'type' => 'faculty',
            'sort_order' => 1
        ]);

        Faculty::create([
            'name' => 'ผศ. สมศรี แสงอรุณ',
            'position' => 'อาจารย์',
            'description' => 'เชี่ยวชาญด้านปัญญาประดิษฐ์และระบบเครือข่าย',
            'type' => 'faculty',
            'sort_order' => 2
        ]);

        Faculty::create([
            'name' => 'ดร. สมหมาย ทองคำ',
            'position' => 'อาจารย์พิเศษ',
            'description' => 'ผู้เชี่ยวชาญด้านความมั่นคงปลอดภัยของระบบสารสนเทศ',
            'type' => 'special',
            'sort_order' => 1
        ]);

        // Contact Content
        ContactContent::create([
            'title' => 'ข้อมูลการติดต่อ',
            'content' => 'สำนักงานสาขาวิชาวิศวกรรมซอฟต์แวร์',
            'section' => 'info',
            'address' => '85 ถนนมาลัยแมน อำเภอเมือง จังหวัดนครปฐม 73000',
            'phone' => '034-252525 ต่อ 1234',
            'email' => 'se@npru.ac.th',
            'fax' => '034-252526',
            'office_hours' => json_encode(['จันทร์-ศุกร์: 08:30-16:30', 'เสาร์: 08:30-12:00']),
            'sort_order' => 1
        ]);
    }
}