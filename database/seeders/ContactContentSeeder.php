<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactContent;

class ContactContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactContent = [
            [
                'title' => 'ข้อมูลภาควิชา',
                'content' => 'เรายินดีที่จะได้ยินจากคุณ! ไม่ว่าคุณจะเป็นนักศึกษาที่สนใจ คู่ค้าในอุตสาหกรรม หรือศิษย์เก่า กรุณาติดต่อเราโดยใช้ข้อมูลด้านล่าง',
                'section' => 'department_info',
                'address' => 'ภาควิชาวิศวกรรมซอฟต์แวร์, คณะวิทยาศาสตร์และเทคโนโลยี, มหาวิทยาลัยราชภัฏนครปฐม, 85 ถนนมาลัยแมน อำเภอเมือง จังหวัดนครปฐม 73000, ประเทศไทย',
                'phone' => '034-261-101 ต่อ 1234',
                'email' => 'se-info@npru.ac.th',
                'fax' => '034-261-102',
                'office_hours' => json_encode([
                    'จันทร์ - ศุกร์: 08:30 น. - 16:30 น.',
                    'เสาร์: 08:30 น. - 12:00 น.',
                    'อาทิตย์: ปิดทำการ'
                ]),
                'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.47404169605!2d100.06423931502925!3d13.818999990326015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30fe72537b45f2db%3A0x203902271857048!2z4Lia4Lix4LiZ4LmA4Lij4Li14Lii4Liy4Lil4LmA4LmA4LiV4LmJ4Liy4Lin4Li04Lio4Lin4LiB4Liy4Lin4LiB4Lix4LiUIOC4reC4s-C4oeC4seC4oeC4seC4lOC4h-C4reC4sOC5gOC4h-C4reC5gOC4l-C4o-C4suC4p-C4tOC4l-C4qOC4reC4h-C4reC5gOC4l-C5gOC4oeC4peC4pe-C4suC4p-4!5e0!3m2!1sen!2sth!4v1630000000000!5m2!1sen!2sth',
                'social_media' => json_encode([
                    'facebook' => 'https://www.facebook.com/NPRUofficial',
                    'twitter' => 'https://twitter.com/NPRUofficial',
                    'linkedin' => 'https://www.linkedin.com/school/npru',
                    'youtube' => 'https://www.youtube.com/user/NPRUofficial'
                ]),
                'sort_order' => 1
            ]
        ];

        foreach ($contactContent as $content) {
            ContactContent::create($content);
        }
    }
}
