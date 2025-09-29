@extends('se.layout')

@section('title', '{{ $item['title'] }} - วิศวกรรมซอฟต์แวร์ NPRU')

@section('content')
<div class="page-header">
    <h1>{{ $item['title'] }}</h1>
    <p>
        @if($item['type'] === 'news')
            <span class="badge news-badge">ข่าวสาร</span>
        @else
            <span class="badge event-badge">กิจกรรม</span>
        @endif
        <span class="date" style="margin-left: 15px;">
            <i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($item['date'])->format('d F Y') }}
        </span>
    </p>
</div>

<section>
    <div style="text-align: center; margin-bottom: 30px;">
        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
    </div>
    
    <div style="font-size: 1.1rem; line-height: 1.7;">
        <p>{{ $item['description'] }}</p>
        
        @if($item['type'] === 'news')
            <p>ข่าวนี้ได้รับการอนุมัติจากคณะกรรมการประชาสัมพันธ์ของภาควิชาวิศวกรรมซอฟต์แวร์ มหาวิทยาลัยราชภัฏนครปฐม และเผยแพร่เพื่อให้ผู้ใช้สามารถเข้าถึงรายละเอียดได้ตามนโยบายของภาควิชา</p>
        @else
            <h3>รายละเอียดกิจกรรม</h3>
            <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
                <li>กิจกรรมนี้เปิดสำหรับนักศึกษา อาจารย์ประจำสาขา และบุคลากรของมหาวิทยาลัย</li>
                <li>ต้องลงทะเบียนล่วงหน้าผ่านระบบออนไลน์</li>
                <li>ให้คะแนนเข้าร่วมกิจกรรมสำหรับนักศึกษา</li>
                <li>อาหารว่างและเอกสารประกอบการให้บริการ</li>
            </ul>
            <p>กิจกรรมนี้ได้รับการอนุมัติจากคณะกรรมการกิจกรรมนักศึกษาของภาควิชาวิศวกรรมซอฟต์แวร์ และเผยแพร่เพื่อให้ผู้ใช้สามารถเข้าถึงรายละเอียดได้ตามนโยบายของภาควิชา</p>
        @endif
        
        <h3>ข้อมูลติดต่อ</h3>
        <p>หากคุณมีข้อสงสัยเพิ่มเติมเกี่ยวกับข่าวสารหรือกิจกรรมนี้ กรุณาติดต่อ:</p>
        <p><strong>ภาควิชาวิศวกรรมซอฟต์แวร์</strong><br>
        มหาวิทยาลัยราชภัฏนครปฐม<br>
        โทรศัพท์: 034-261-101 ต่อ 1234<br>
        อีเมล: se-info@npru.ac.th</p>
    </div>
    
    <div style="margin-top: 30px; text-align: center;">
        <a href="{{ route('se.news') }}" class="btn" style="background-color: #7f8c8d;">กลับไปยังรายการข่าวสารและกิจกรรม</a>
    </div>
</section>

<style>
    .badge {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        color: white;
    }
    
    .news-badge {
        background-color: #e74c3c;
    }
    
    .event-badge {
        background-color: #3498db;
    }
    
    .date {
        color: #7f8c8d;
        font-size: 0.9rem;
    }
</style>
@endsection