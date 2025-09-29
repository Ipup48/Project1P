@extends('se.layout')

@section('title', 'เกี่ยวกับเรา - วิศวกรรมซอฟต์แวร์ NPRU')

@section('content')
<div class="page-header">
    <h1>เกี่ยวกับภาควิชา</h1>
    <p>เรียนรู้เพิ่มเติมเกี่ยวกับภาควิชาวิศวกรรมซอฟต์แวร์ NPRU</p>
</div>

@foreach($aboutContent as $content)
    @if($content->section == 'overview')
    <section>
        <h2>{{ $content->title }}</h2>
        <p>{{ $content->content }}</p>
        
        <div style="text-align: center; margin: 30px 0;">
            <img src="{{ asset($content->image) }}" alt="ภาควิชาวิศวกรรมซอฟต์แวร์" style="width: 100%; max-width: 600px; height: 300px; object-fit: cover; border-radius: 8px;" onerror="this.src='https://via.placeholder.com/300x300?text=No+Image+Available'">
        </div>
    </section>
    
    @elseif($content->section == 'mission')
    <section>
        <h3>{{ $content->title }}</h3>
        <p>{{ $content->content }}</p>
    </section>
    
    @elseif($content->section == 'vision')
    <section>
        <h3>{{ $content->title }}</h3>
        <p>{{ $content->content }}</p>
    </section>
    
    @elseif($content->section == 'general_info')
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
    
    @elseif($content->section == 'objectives')
    <section>
        <h2>{{ $content->title }}</h2>
        <div class="card-container">
            <div class="card">
                <div class="card-content">
                    <h3>ความเชี่ยวชาญทางเทคนิค</h3>
                    <p>บัณฑิตจะมีทักษะทางเทคนิคที่แข็งแกร่งในการพัฒนาซอฟต์แวร์ การออกแบบระบบ และการแก้ไขปัญหา</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h3>ทักษะเฉพาะทาง</h3>
                    <p>บัณฑิตจะแสดงให้เห็นถึงการสื่อสารที่มีประสิทธิภาพ ความสามารถในการทำงานเป็นทีม และทักษะการจัดการโครงการ</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h3>การเรียนรู้อย่างต่อเนื่อง</h3>
                    <p>บัณฑิตจะมีส่วนร่วมในการเรียนรู้ตลอดชีวิตเพื่อปรับตัวให้เข้ากับเทคโนโลยีที่เปลี่ยนแปลงไปและแนวทางปฏิบัติในอุตสาหกรรม</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h3>ความรับผิดชอบทางจริยธรรม</h3>
                    <p>บัณฑิตจะเข้าใจและปฏิบักติตามความรับผิดชอบทางวิชาชีพและจริยธรรมในการพัฒนาซอฟต์แวร์</p>
                </div>
            </div>
        </div>
    </section>
    
    @elseif($content->section == 'outcomes')
    <section>
        <h2>{{ $content->title }}</h2>
        <p>หลังจากจบการศึกษาจากหลักสูตรของเรา นักศึกษาจะสามารถ:</p>
        <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
            <li>นำความรู้ทางคณิตศาสตร์ วิทยาศาสตร์ และวิศวกรรมมาประยุกต์ใช้กับปัญหาด้านวิศวกรรมซอฟต์แวร์</li>
            <li>ออกแบบและพัฒนาระบบซอฟต์แวร์ที่ตรงตามข้อกำหนด</li>
            <li>ใช้เครื่องมือและเทคนิคด้านวิศวกรรมซอฟต์แวร์ทันสมัยอย่างมีประสิทธิภาพ</li>
            <li>ทำงานเป็นทีมและสื่อสารแนวคิดทางเทคนิคอย่างชัดเจน</li>
            <li>เข้าใจและรับผิดชอบทางจริยธรรมในงานพัฒนาซอฟต์แวร์</li>
            <li>มีส่วนร่วมในการเรียนรู้และการพัฒนาทางวิชาชีพอย่างต่อเนื่อง</li>
            <li>นำเทคนิคการจัดการโครงการมาประยุกต์ใช้กับโครงการพัฒนาซอฟต์แวร์</li>
            <li>ดำเนินการทดสอบซอฟต์แวร์และการประกันคุณภาพ</li>
        </ul>
    </section>
    
    @elseif($content->section == 'history')
    <section>
        <h2>{{ $content->title }}</h2>
        <p>{{ $content->content }}</p>
        <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
            <li>ผลิตบัณฑิตกว่า 500 คนที่กำลังทำงานในบริษัทเทคโนโลยีชั้นนำ</li>
            <li>สร้างความร่วมมือกับบริษัทเทคโนโลยีกว่า 20 แห่งสำหรับการฝึกงานและการจ้างงาน</li>
            <li>ตีพิมพ์บทความวิจัยกว่า 100 บทความในวารสารและงานประชุมระดับนานาชาติ</li>
            <li>ได้รับรางวัลมากมายสำหรับความเป็นเลิศในการสอนและการวิจัย</li>
        </ul>
    </section>
    @endif
@endforeach
@endsection