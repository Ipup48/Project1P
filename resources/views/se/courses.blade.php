@extends('se.layout')

@section('title', 'หลักสูตร - วิศวกรรมซอฟต์แวร์ NPRU')

@section('content')
<div class="page-header">
    <h1>หลักสูตรของเรา</h1>
    <p>สำรวจหลักสูตรและรายวิชาในหลักสูตรวิศวกรรมซอฟต์แวร์ของเรา</p>
</div>

@foreach($coursesContent as $content)
    @if($content->section == 'general_info')
    <section>
        <h2>{{ $content->title }}</h2>
        @if($content->list_items)
        <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
            @foreach(json_decode($content->list_items) as $item)
            <li>{!! $item !!}</li>
            @endforeach
        </ul>
        @endif
        <p><a href="https://sc.npru.ac.th/sc_major/./assets/attachs/major/1706694468_47edd5cc1ed73615518c.pdf" class="btn" style="background-color: #3498db;">ดาวน์โหลดรายละเอียดหลักสูตร</a></p>
    </section>
    
    @elseif($content->section == 'structure')
    <section>
        <h2>{{ $content->title }}</h2>
        <p>{{ $content->content }}</p>
        
        <h3>{{ $content->subtitle }}</h3>
        @if($content->list_items)
        <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
            @foreach(json_decode($content->list_items) as $item)
            <li>{!! $item !!}</li>
            @endforeach
        </ul>
        @endif
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
    
    @elseif($content->section == 'core_subjects')
    <section>
        <h2>{{ $content->title }}</h2>
        <div class="card-container">
            @if($content->year == 1)
            <div class="card">
                <div class="card-content">
                    <h3>{{ $content->subtitle }}</h3>
                    @if($content->list_items)
                    <ul style="list-style-type: circle; padding-left: 20px; margin: 10px 0;">
                        @foreach(json_decode($content->list_items) as $item)
                        <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            @elseif($content->year == 2)
            <div class="card">
                <div class="card-content">
                    <h3>{{ $content->subtitle }}</h3>
                    @if($content->list_items)
                    <ul style="list-style-type: circle; padding-left: 20px; margin: 10px 0;">
                        @foreach(json_decode($content->list_items) as $item)
                        <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            @elseif($content->year == 3)
            <div class="card">
                <div class="card-content">
                    <h3>{{ $content->subtitle }}</h3>
                    @if($content->list_items)
                    <ul style="list-style-type: circle; padding-left: 20px; margin: 10px 0;">
                        @foreach(json_decode($content->list_items) as $item)
                        <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            @elseif($content->year == 4)
            <div class="card">
                <div class="card-content">
                    <h3>{{ $content->subtitle }}</h3>
                    @if($content->list_items)
                    <ul style="list-style-type: circle; padding-left: 20px; margin: 10px 0;">
                        @foreach(json_decode($content->list_items) as $item)
                        <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </section>
    
    @elseif($content->section == 'specializations')
    <section>
        <h2>{{ $content->title }}</h2>
        <p>{{ $content->content }}</p>
        
        <div class="card-container">
            @if($content->subtitle == 'ปัญญาประดิษฐ์')
            <div class="card">
                <div class="card-content">
                    <h3>{{ $content->subtitle }}</h3>
                    @if($content->list_items)
                    <p>{{ json_decode($content->list_items)[0] }}</p>
                    @endif
                </div>
            </div>
            @elseif($content->subtitle == 'การพัฒนาเว็บและมือถือ')
            <div class="card">
                <div class="card-content">
                    <h3>{{ $content->subtitle }}</h3>
                    @if($content->list_items)
                    <p>{{ json_decode($content->list_items)[0] }}</p>
                    @endif
                </div>
            </div>
            @elseif($content->subtitle == 'ความปลอดภัยไซเบอร์')
            <div class="card">
                <div class="card-content">
                    <h3>{{ $content->subtitle }}</h3>
                    @if($content->list_items)
                    <p>{{ json_decode($content->list_items)[0] }}</p>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </section>
    
    @elseif($content->section == 'electives')
    <section>
        <h2>{{ $content->title }}</h2>
        <p>{{ $content->content }}</p>
        @if($content->list_items)
        <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
            @foreach(json_decode($content->list_items) as $item)
            <li>{!! $item !!}</li>
            @endforeach
        </ul>
        @endif
    </section>
    @endif
@endforeach
@endsection