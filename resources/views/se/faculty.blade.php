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
        @foreach($faculty as $member)
        <div class="card">
            <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>{{ $member->name }}</h3>
                <p><strong>{{ $member->position }}</strong></p>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section>
    <h2>อาจารย์พิเศษและนักวิจัย</h2>
    <div class="card-container">
        @foreach($specialFaculty as $member)
        <div class="card">
            <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                <h3>{{ $member->name }}</h3>
                <p>{{ $member->position }}</p>
            </div>
        </div>
        @endforeach
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