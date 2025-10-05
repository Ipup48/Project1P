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
                'content' => 'ยินดีต้อนรับสู่สาขาวิชาวิศวกรรมซอฟต์แวร์ มหาวิทยาลัยราชภัฏนครปฐม ที่มีชื่อเสียงในด้านการผลิตบัณฑิตที่มีคุณภาพและมีทักษะเฉพาะทางด้านเทคโนโลยีสารสนเทศ',
                'section' => 'banner',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR670W3EnBsPk9cX1doJxxPHibFAqEqhGXeAg&s',
                'subtitle' => 'Software Engineering Program',
                'list_items' => null,
                'link' => null,
                'link_text' => null,
                'sort_order' => 1
            ],
            [
                'title' => 'ข้อมูลทั่วไป',
                'content' => 'หลักสูตรวิศวกรรมซอฟต์แวร์เป็นหลักสูตรที่ออกแบบมาเพื่อเตรียมความพร้อมให้นักศึกษามีความรู้ ความสามารถ และทักษะที่จำเป็นสำหรับการทำงานในอุตสาหกรรมซอฟต์แวร์',
                'section' => 'general_info',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR670W3EnBsPk9cX1doJxxPHibFAqEqhGXeAg&s',
                'subtitle' => 'หลักสูตรที่ทันสมัยและสอดคล้องกับความต้องการของตลาดแรงงาน',
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
                'content' => 'บัณฑิตที่สำเร็จการศึกษาจากหลักสูตรวิศวกรรมซอฟต์แวร์จะมีโอกาสประกอบอาชีพหลากหลายในอุตสาหกรรมเทคโนโลยีสารสนเทศ',
                'section' => 'careers',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR670W3EnBsPk9cX1doJxxPHibFAqEqhGXeAg&s',
                'subtitle' => 'โอกาสในการประกอบอาชีพที่หลากหลาย',
                'list_items' => json_encode([
                    'วิศวกรซอฟต์แวร์',
                    'นักวิเคราะห์ระบบ',
                    'นักพัฒนาแอปพลิเคชัน',
                    'ผู้จัดการโครงการซอฟต์แวร์',
                    'ที่ปรึกษาด้านเทคโนโลยีสารสนเทศ',
                    'ผู้ประกอบการด้านเทคโนโลยี'
                ]),
                'link' => '/se/courses',
                'link_text' => 'ดูรายละเอียดหลักสูตร',
                'sort_order' => 3
            ],
            [
                'title' => 'อาจารย์ประจำหลักสูตร',
                'content' => 'ทีมงานอาจารย์ผู้เชี่ยวชาญที่มีประสบการณ์ในการสอนและการทำงานในอุตสาหกรรมเทคโนโลยีสารสนเทศ',
                'section' => 'faculty',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR670W3EnBsPk9cX1doJxxPHibFAqEqhGXeAg&s',
                'subtitle' => 'ทีมงานที่มีคุณภาพและประสบการณ์',
                'list_items' => json_encode([
                    'ผู้เชี่ยวชาญด้านวิศวกรรมซอฟต์แวร์',
                    'มีประสบการณ์การทำงานในบริษัทเทคโนโลยีชั้นนำ',
                    'มีผลงานวิจัยที่ได้รับการยอมรับในระดับนานาชาติ'
                ]),
                'link' => '/se/faculty',
                'link_text' => 'ดูข้อมูลอาจารย์ทั้งหมด',
                'sort_order' => 4
            ],
            [
                'title' => 'อาจารย์พิเศษและนักวิจัย',
                'content' => 'อาจารย์พิเศษและนักวิจัยจากภาคอุตสาหกรรมที่มีประสบการณ์ตรงในด้านวิศวกรรมซอฟต์แวร์',
                'section' => 'special_faculty',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR670W3EnBsPk9cX1doJxxPHibFAqEqhGXeAg&s',
                'subtitle' => 'ความเชี่ยวชาญจากภาคอุตสาหกรรม',
                'list_items' => json_encode([
                    'ผู้เชี่ยวชาญจากบริษัทเทคโนโลยีชั้นนำ',
                    'นักวิจัยที่มีผลงานในระดับนานาชาติ',
                    'ผู้ประกอบการด้านเทคโนโลยีสารสนเทศ'
                ]),
                'link' => '/se/faculty',
                'link_text' => 'ดูข้อมูลอาจารย์พิเศษ',
                'sort_order' => 5
            ],
            [
                'title' => 'ห้องปฏิบัติการ',
                'content' => 'ห้องปฏิบัติการที่ทันสมัยและมีอุปกรณ์ครบครันสำหรับการเรียนรู้และพัฒนาทักษะด้านวิศวกรรมซอฟต์แวร์',
                'section' => 'laboratories',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR670W3EnBsPk9cX1doJxxPHibFAqEqhGXeAg&s',
                'subtitle' => 'สภาพแวดล้อมการเรียนรู้ที่ดีเยี่ยม',
                'list_items' => json_encode([
                    'ห้องปฏิบัติการพัฒนาซอฟต์แวร์',
                    'ห้องปฏิบัติการระบบเครือข่าย',
                    'ห้องปฏิบัติการฐานข้อมูล',
                    'ห้องปฏิบัติการปัญญาประดิษฐ์'
                ]),
                'link' => null,
                'link_text' => null,
                'sort_order' => 6
            ],
            [
                'title' => 'กิจกรรมเด่น',
                'content' => 'กิจกรรมที่จัดขึ้นเพื่อส่งเสริมการเรียนรู้และการพัฒนาทักษะของนักศึกษาในด้านต่างๆ',
                'section' => 'activities',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR670W3EnBsPk9cX1doJxxPHibFAqEqhGXeAg&s',
                'subtitle' => 'กิจกรรมที่ส่งเสริมการเรียนรู้',
                'list_items' => json_encode([
                    'สัมมนาวิชาการระดับนานาชาติ',
                    'โครงการฝึกงานในต่างประเทศ',
                    'การประกวดโครงงานนักศึกษา',
                    'เวิร์กช็อปพัฒนาทักษะเฉพาะทาง'
                ]),
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