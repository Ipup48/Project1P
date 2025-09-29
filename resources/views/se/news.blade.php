@extends('se.layout')

@section('title', 'ข่าวสารและกิจกรรม - วิศวกรรมซอฟต์แวร์ NPRU')

@section('content')
<div class="page-header">
    <h1>ข่าวสารและกิจกรรม</h1>
    <p>ติดตามข่าวสารล่าสุดและกิจกรรมที่กำลังจะเกิดขึ้นของภาควิชาวิศวกรรมซอฟต์แวร์</p>
</div>

<section>
    <div class="card-container">
        @foreach($newsAndEvents as $item)
        <div class="card">
            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
            <div class="card-content">
                @if($item['type'] === 'news')
                    <span class="badge news-badge">
                        ข่าวสาร
                    </span>
                @else
                    <span class="badge event-badge">
                        กิจกรรม
                    </span>
                @endif
                <h3>{{ $item['title'] }}</h3>
                <p class="date">
                    <i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($item['date'])->format('d F Y') }}
                </p>
                <p>{{ $item['description'] }}</p>
                <a href="{{ route('se.news.show', $item['id']) }}" class="btn" style="margin-top: 15px;">อ่านเพิ่มเติม</a>
            </div>
        </div>
        @endforeach
    </div>
    
    <div style="margin-top: 30px; text-align: center;">
        <p>ข่าวสารและกิจกรรมทั้งหมดได้รับการอนุมัติจากผู้ดูแลระบบของภาควิชาวิศวกรรมซอฟต์แวร์ มหาวิทยาลัยราชภัฏนครปฐม ก่อนเผยแพร่</p>
    </div>
</section>

<style>
    .badge {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
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
        margin: 10px 0;
    }
</style>
@endsection