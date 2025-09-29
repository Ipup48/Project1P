<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutContent;

class AboutContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aboutContent = [
            [
                'title' => 'ภาพรวมภาควิชา',
                'content' => 'ภาควิชาวิศวกรรมซอฟต์แวร์ มหาวิทยาลัยราชภัฏนครปฐม ก่อตั้งขึ้นเพื่อตอบสนองความต้องการของวิศวกรซอฟต์แวร์ที่มีคุณภาพในประเทศไทยและทั่วโลก หลักสูตรของเราเน้นทั้งพื้นฐานทางทฤษฎีและการประยุกต์ใช้หลักการด้านวิศวกรรมซอฟต์แวร์',
                'section' => 'overview',
                'image' => 'images/se-npru-logo.jpg',
                'sort_order' => 1
            ],
            [
                'title' => 'พันธกิจ',
                'content' => 'เพื่อผลิตวิศวกรซอฟต์แวร์ที่มีความสามารถซึ่งสามารถมีส่วนร่วมในการพัฒนาซอฟต์แวร์ที่เชื่อถือได้ มีประสิทธิภาพ และเป็นนวัตกรรมที่ตอบสนองความต้องการของสังคม',
                'section' => 'mission',
                'image' => null,
                'sort_order' => 2
            ],
            [
                'title' => 'วิสัยทัศน์',
                'content' => 'เป็นภาควิชาชั้นนำในการศึกษาและการวิจัยด้านวิศวกรรมซอฟต์แวร์ ที่ได้รับการยอมรับว่าเป็นผู้ผลิตบัณฑิตที่มีความเป็นเลิศในอาชีพและมีส่วนร่วมในการพัฒนานวัตกรรมทางเทคโนโลยี',
                'section' => 'vision',
                'image' => null,
                'sort_order' => 3
            ],
            [
                'title' => 'ข้อมูลทั่วไป',
                'content' => null,
                'section' => 'general_info',
                'image' => null,
                'sort_order' => 4
            ],
            [
                'title' => 'อาชีพหลังสำเร็จการศึกษา',
                'content' => null,
                'section' => 'careers',
                'image' => null,
                'sort_order' => 5
            ],
            [
                'title' => 'วัตถุประสงค์การศึกษา',
                'content' => null,
                'section' => 'objectives',
                'image' => null,
                'sort_order' => 6
            ],
            [
                'title' => 'ผลลัพธ์การศึกษาของนักศึกษา',
                'content' => null,
                'section' => 'outcomes',
                'image' => null,
                'sort_order' => 7
            ],
            [
                'title' => 'ประวัติภาควิชา',
                'content' => 'ก่อตั้งในปี พ.ศ. 2548 ภาควิชาวิศวกรรมซอฟต์แวร์ได้เติบโตจากโปรแกรมเล็กๆ ที่มีนักศึกษา 30 คน เป็นหนึ่งในภาควิชาด้านวิศวกรรมซอฟต์แวร์ที่ได้รับความเคารพนับถือในภูมิภาค ตลอดหลายปีที่ผ่านมา เราได้:',
                'section' => 'history',
                'image' => null,
                'sort_order' => 8
            ]
        ];

        foreach ($aboutContent as $content) {
            AboutContent::create($content);
        }
    }
}
