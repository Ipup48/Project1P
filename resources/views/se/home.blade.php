@extends('se.layout')

@section('title', 'หน้าแรก - วิศวกรรมซอฟต์แวร์ NPRU')

@section('content')
<div class="page-header">
    <h1>สาขาวิชาวิศวกรรมซอฟต์แวร์</h1>
    <p>คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
</div>

@foreach($homeContent as $content)
    @if($content->section == 'banner')
    <section>
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset($content->image) }}" alt="{{ $content->title }}" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
        </div>
    </section>
    
    @elseif($content->section == 'general_info')
    <section>
        <h2>{{ $content->title }}</h2>
        <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
            @foreach(json_decode($content->list_items) as $item)
            <li>{!! $item !!}</li>
            @endforeach
        </ul>
        <p><a href="{{ $content->link }}" class="btn" style="background-color: #3498db;">{{ $content->link_text }}</a></p>
    </section>
    
    @elseif($content->section == 'careers')
    <section>
        <h2>{{ $content->title }}</h2>
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
    
    @elseif($content->section == 'faculty')
    <section>
        <h2>{{ $content->title }}</h2>
        <div class="card-container">
            @php
                $facultyMembers = \App\Models\Faculty::where('type', 'faculty')->orderBy('sort_order')->limit(5)->get();
            @endphp
            @foreach($facultyMembers as $member)
            <div class="card">
                <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" style="width: 100%; height: 300px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
                <div class="card-content">
                    <h3>{{ $member->name }}</h3>
                    <p><strong>{{ $member->position }}</strong></p>
                </div>
            </div>
            @endforeach
        </div>
        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ route('se.faculty') }}" class="btn" style="background-color: #9b59b6;">ดูอาจารย์ทั้งหมด</a>
        </div>
    </section>
    
    @elseif($content->section == 'special_faculty')
    <section>
        <h2>{{ $content->title }}</h2>
        <div class="card-container">
            @php
                $specialFacultyMembers = \App\Models\Faculty::where('type', 'special')->orderBy('sort_order')->get();
            @endphp
            @foreach($specialFacultyMembers as $member)
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
    
    @elseif($content->section == 'laboratories')
    <section>
        <h2>{{ $content->title }}</h2>
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
    
    @elseif($content->section == 'activities')
    <section>
        <h2>{{ $content->title }}</h2>
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
    @endif
@endforeach
@endsection