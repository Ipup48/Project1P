@extends('se.layout')

@section('title', 'อาจารย์ประจำสาขา - วิศวกรรมซอฟต์แวร์ NPRU')

@section('content')
<div class="page-header">
    <h1>อาจารย์ประจำสาขา</h1>
    <p>คณะผู้สอนและให้คำปรึกษาแก่นักศึกษาในสาขา</p>
</div>

<section>
    <h2>อาจารย์ประจำสาขา</h2>
    <div class="card-container">
        <!-- Department Chair -->
        <div class="card">
            <img src="{{ asset('images/faculty/1706694016_43d4f45dca2d4f9011a4.jpg') }}" alt="ผศ.ดร.อุษณีย์ ภักดีตระกูลวงศ์" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ผศ.ดร.อุษณีย์ ภักดีตระกูลวงศ์</h3>
                <p><strong>ประธานฯ สาขาวิชา</strong></p>
            </div>
        </div>
        
        <!-- Vice Chair -->
        <div class="card">
            <img src="{{ asset('images/faculty/1706693986_c5a3e8541b6f087048fa.jpg') }}" alt="ผศ.ดร. วรเชษฐ์ อุทธา" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ผศ.ดร. วรเชษฐ์ อุทธา</h3>
                <p><strong>รองประธานสาขา (ประธานสาขา)</strong></p>
            </div>
        </div>
        
        <!-- Vice Chair - Policy and Planning -->
        <div class="card">
            <img src="{{ asset('images/faculty/1706694064_e094c4d933ac0ed7cd03.jpg') }}" alt="ผศ.สมเกียรติ ช่อเหมือน" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ผศ.สมเกียรติ ช่อเหมือน</h3>
                <p><strong>รองประธานฯ ฝ่ายนโยบายและแผน</strong></p>
            </div>
        </div>
        
        <!-- Vice Chair - Quality Assurance -->
        <div class="card">
            <img src="{{ asset('images/faculty/1716485261_38d6e57b8d63fe377d25.jpg') }}" alt="ผศ.นฤพล สุวรรณวิจิตร" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>ผศ.นฤพล สุวรรณวิจิตร</h3>
                <p><strong>รองประธานฯ ฝ่ายประกันคุณภาพฯ</strong></p>
            </div>
        </div>
        
        <!-- Vice Chair - Student Affairs -->
        <div class="card">
            <img src="{{ asset('images/faculty/1706694139_d6a2ba899f7470f5fd45.png') }}" alt="อาจารย์ ดร.สุพิฌาย์ จันทร์เรือง" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>อาจารย์ ดร.สุพิฌาย์ จันทร์เรือง</h3>
                <p><strong>รองประธานฯ ฝ่ายกิจการนักศึกษา</strong></p>
            </div>
        </div>
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
    <h2>สาขาที่ทำการวิจัย</h2>
    <p>อาจารย์ประจำสาขาได้ทำการวิจัยอย่างแข็งขันในหลากหลายสาขา:</p>
    <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
        <li>สถาปัตยกรรมและการออกแบบซอฟต์แวร์</li>
        <li>แนวทาง Agile และ DevOps</li>
        <li>การประยุกต์ใช้ปัญญาประดิษฐ์และ Machine Learning</li>
        <li>ความปลอดภัยไซเบอร์และความเป็นส่วนตัวในระบบซอฟต์แวร์</li>
        <li>การพัฒนาแอปพลิเคชันมือถือและเว็บ</li>
        <li>การทดสอบและประกันคุณภาพซอฟต์แวร์</li>
        <li>การโต้ตอบระหว่างมนุษย์กับคอมพิวเตอร์และประสบการณ์ผู้ใช้</li>
        <li>การวิเคราะห์ข้อมูลขนาดใหญ่และวิทยาการข้อมูล</li>
    </ul>
</section>
@endsection