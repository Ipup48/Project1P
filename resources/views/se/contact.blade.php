@extends('se.layout')

@section('title', 'ติดต่อ - วิศวกรรมซอฟต์แวร์ NPRU')

@section('content')
<div class="page-header">
    <h1>ติดต่อเรา</h1>
    <p>ติดต่อภาควิชาวิศวกรรมซอฟต์แวร์</p>
</div>

<section>
    <h2>ข้อมูลภาควิชา</h2>
    <p>เรายินดีที่จะได้ยินจากคุณ! ไม่ว่าคุณจะเป็นนักศึกษาที่สนใจ คู่ค้าในอุตสาหกรรม หรือศิษย์เก่า กรุณาติดต่อเราโดยใช้ข้อมูลด้านล่าง</p>
    
    <div style="display: flex; flex-wrap: wrap; gap: 30px; margin: 30px 0;">
        <div style="flex: 1; min-width: 300px;">
            <h3>ที่อยู่ไปรษณีย์</h3>
            <p>ภาควิชาวิศวกรรมซอฟต์แวร์<br>
            คณะวิทยาศาสตร์และเทคโนโลยี<br>
            มหาวิทยาลัยราชภัฏนครปฐม<br>
            85 ถนนมาลัยแมน อำเภอเมือง จังหวัดนครปฐม 73000<br>
            ประเทศไทย</p>
            
            <h3 style="margin-top: 20px;">ข้อมูลการติดต่อ</h3>
            <p><strong>โทรศัพท์:</strong> 034-261-101 ต่อ 1234<br>
            <strong>อีเมล:</strong> se-info@npru.ac.th<br>
            <strong>โทรสาร:</strong> 034-261-102</p>
            
            <h3 style="margin-top: 20px;">เวลาทำการ</h3>
            <p>จันทร์ - ศุกร์: 08:30 น. - 16:30 น.<br>
            เสาร์: 08:30 น. - 12:00 น.<br>
            อาทิตย์: ปิดทำการ</p>
        </div>
        
        <div style="flex: 1; min-width: 300px;">
            <h3>แผนที่สถานที่</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.47404169605!2d100.06423931502925!3d13.818999990326015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30fe72537b45f2db%3A0x203902271857048!2z4Lia4Lix4LiZ4LmA4Lij4Li14Lii4Liy4Lil4LmA4LmA4LiV4LmJ4Liy4Lin4Li04Lio4Lin4LiB4Liy4Lin4LiB4Lix4LiUIOC4reC4s-C4oeC4seC4oeC4seC4lOC4h-C4reC4sOC5gOC4h-C4reC5gOC4l-C4o-C4suC4p-C4tOC4l-C4qOC4reC4h-C4reC5gOC4l-C5gOC4oeC4peC4pe-C4suC4p-4!5e0!3m2!1sen!2sth!4v1630000000000!5m2!1sen!2sth" width="100%" height="300" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<section>
    <h2>ส่งข้อความถึงเรา</h2>
    <form style="max-width: 600px; margin: 0 auto;">
        <div style="margin-bottom: 20px;">
            <label for="name" style="display: block; margin-bottom: 5px; font-weight: 500;">ชื่อ</label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: 'Prompt', sans-serif;">
        </div>
        
        <div style="margin-bottom: 20px;">
            <label for="email" style="display: block; margin-bottom: 5px; font-weight: 500;">อีเมล</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: 'Prompt', sans-serif;">
        </div>
        
        <div style="margin-bottom: 20px;">
            <label for="subject" style="display: block; margin-bottom: 5px; font-weight: 500;">หัวข้อ</label>
            <input type="text" id="subject" name="subject" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: 'Prompt', sans-serif;">
        </div>
        
        <div style="margin-bottom: 20px;">
            <label for="message" style="display: block; margin-bottom: 5px; font-weight: 500;">ข้อความ</label>
            <textarea id="message" name="message" rows="6" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: 'Prompt', sans-serif;"></textarea>
        </div>
        
        <div style="text-align: center;">
            <button type="submit" class="btn">ส่งข้อความ</button>
        </div>
    </form>
</section>

<section>
    <h2>เชื่อมต่อกับเรา</h2>
    <div style="display: flex; justify-content: center; gap: 20px; margin: 20px 0;">
        <a href="https://www.facebook.com/NPRUofficial" target="_blank" style="display: inline-block; width: 50px; height: 50px; background-color: #3b5998; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; font-weight: bold;">f</a>
        <a href="https://twitter.com/NPRUofficial" target="_blank" style="display: inline-block; width: 50px; height: 50px; background-color: #1da1f2; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; font-weight: bold;">t</a>
        <a href="https://www.linkedin.com/school/npru" target="_blank" style="display: inline-block; width: 50px; height: 50px; background-color: #0077b5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; font-weight: bold;">in</a>
        <a href="https://www.youtube.com/user/NPRUofficial" target="_blank" style="display: inline-block; width: 50px; height: 50px; background-color: #ff0000; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; font-weight: bold;">y</a>
    </div>
</section>
@endsection