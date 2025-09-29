@extends('se.layout')

@section('title', 'หน้าแรก - วิศวกรรมซอฟต์แวร์ NPRU')

@section('content')
<div class="page-header">
    <h1>สาขาวิชาวิศวกรรมซอฟต์แวร์</h1>
    <p>คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
</div>

<section>
    <div style="text-align: center; margin-bottom: 30px;">
        <img src="{{ asset('images/banner/1693382011_2c0ee9d91d20a0202d5f.jpg') }}" alt="สาขาวิชาวิศวกรรมซอฟต์แวร์" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
    </div>
</section>

<section>
    <h2>ข้อมูลทั่วไป</h2>
    <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
        <li><strong>ชื่อปริญญาไทย:</strong> วิทยาศาสตรบัณฑิต (วิศวกรรมซอฟต์แวร์)</li>
        <li><strong>ชื่อปริญญาอังกฤษ:</strong> Bachelor of Science (Software Engineering) (B.Sc.)</li>
        <li><strong>รูปแบบหลักสูตร:</strong> ระดับปริญญาตรี หลักสูตร 4 ปี</li>
        <li><strong>หน่วยกิต:</strong> ไม่น้อยกว่า 128 หน่วยกิต</li>
        <li><strong>ภาษาที่ใช้:</strong> ไทย/Thai/泰语 (Tàiyǔ)</li>
        <li><strong>ค่าเรียน:</strong> 11,400 บาท/เทอม</li>
        <li><strong>หลักสูตรปรับปรุง:</strong> พ.ศ. 2564</li>
    </ul>
    <p><a href="https://sc.npru.ac.th/sc_major/./assets/attachs/major/1706694468_47edd5cc1ed73615518c.pdf" class="btn" style="background-color: #3498db;">ดาวน์โหลดรายละเอียดหลักสูตร</a></p>
</section>

<section>
    <h2>อาชีพหลังสำเร็จการศึกษา</h2>
    <div class="card-container">
        <div class="card">
            <div class="card-content">
                <h3>เจ้าหน้าที่ตรวจสอบคุณภาพซอฟต์แวร์</h3>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>โปรแกรมเมอร์</h3>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>วิศวกรซอฟต์แวร์</h3>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>นักทดสอบระบบ</h3>
            </div>
        </div>
    </div>
</section>

<section>
    <h2>อาจารย์ประจำหลักสูตร</h2>
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('images/faculty/1706694016_43d4f45dca2d4f9011a4.jpg') }}" alt="ผศ.ดร.อุษณีย์ ภักดีตระกูลวงศ์" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ผศ.ดร.อุษณีย์ ภักดีตระกูลวงศ์</h3>
                <p><strong>ประธานฯ สาขาวิชา</strong></p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/faculty/1706693986_c5a3e8541b6f087048fa.jpg') }}" alt="ผศ.ดร. วรเชษฐ์ อุทธา" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ผศ.ดร. วรเชษฐ์ อุทธา</h3>
                <p><strong>รองประธานสาขา (ประธานสาขา)</strong></p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/faculty/1706694064_e094c4d933ac0ed7cd03.jpg') }}" alt="ผศ.สมเกียรติ ช่อเหมือน" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ผศ.สมเกียรติ ช่อเหมือน</h3>
                <p><strong>รองประธานฯ ฝ่ายนโยบายและแผน</strong></p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/faculty/1716485261_38d6e57b8d63fe377d25.jpg') }}" alt="ผศ.นฤพล สุวรรณวิจิตร" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ผศ.นฤพล สุวรรณวิจิตร</h3>
                <p><strong>รองประธานฯ ฝ่ายประกันคุณภาพฯ</strong></p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/faculty/1706694139_d6a2ba899f7470f5fd45.png') }}" alt="อาจารย์ ดร.สุพิฌาย์ จันทร์เรือง" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>อาจารย์ ดร.สุพิฌาย์ จันทร์เรือง</h3>
                <p><strong>รองประธานฯ ฝ่ายกิจการนักศึกษา</strong></p>
            </div>
        </div>
    </div>
    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('se.faculty') }}" class="btn" style="background-color: #9b59b6;">ดูอาจารย์ทั้งหมด</a>
    </div>
</section>

<section>
    <h2>อาจารย์พิเศษและนักวิจัย</h2>
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('images/faculty/1706697016_17296e0d4cca0c92558f.jpg') }}" alt="อาจารย์สมหมาย กรังพานิช" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>อาจารย์สมหมาย กรังพานิช</h3>
                <p>กรรมการผู้จัดการ บริษัท พี เอ็น พี โซลูชั่น จำกัด</p>
                <p>กรรมการสมาคมอุตสาหกรรมชอฟต์แวร์ไทย</p>
            </div>
        </div>
    </div>
</section>

<section>
    <h2>ห้องปฏิบัติการ</h2>
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('images/banner/1706695830_4cfc50904539177efe52.jpg') }}" alt="อาคารปฏิบัติการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏนครปฐม" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>อาคารปฏิบัติการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏนครปฐม</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/banner/1706696144_9c9da38b4de6b2f98859.jpg') }}" alt="ห้องปฏิบัติการคอมพิวเตอร์ C408" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ห้องปฏิบัติการคอมพิวเตอร์ C408</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/banner/1716485181_0bfa33ce1d136a430a0a.png') }}" alt="ห้องปฏิบัติการคอมพิวเตอร์ C409" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ห้องปฏิบัติการคอมพิวเตอร์ C409</h3>
            </div>
        </div>
    </div>
</section>

<section>
    <h2>กิจกรรมเด่น</h2>
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('images/banner/1717372516_c7f4c286dd3fea87e017.jpg') }}" alt="พักผ่อนหย่อนใจ" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>พักผ่อนหย่อนใจ</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/banner/1717372516_c7f4c286dd3fea87e017.jpg') }}" alt="ทานไอติมคลายร้อน" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ทานไอติมคลายร้อน</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/banner/1706695485_b727e1eb5ce5b9663f9d.jpg') }}" alt="ตรวจประกันคุณภาพการศึกษาภายใน ระดับหลักสูตร 2566" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ตรวจประกันคุณภาพการศึกษาภายใน ระดับหลักสูตร 2566</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/banner/1706669700_7778ac4e41f62ef3b31c.jpg') }}" alt="เตรียมความพร้อม 2567" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>เตรียมความพร้อม 2567</h3>
            </div>
        </div>
    </div>
</section>
@endsection