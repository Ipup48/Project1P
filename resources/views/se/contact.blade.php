@extends('se.layout')

@section('title', 'ติดต่อ - วิศวกรรมซอฟต์แวร์ NPRU')

@section('content')
<div class="page-header">
    <h1>ติดต่อเรา</h1>
    <p>ติดต่อภาควิชาวิศวกรรมซอฟต์แวร์</p>
</div>

@foreach($contactContent as $content)
    @if($content->section == 'department_info')
    <section>
        <h2>{{ $content->title }}</h2>
        <p>{{ $content->content }}</p>
        
        <div style="display: flex; flex-wrap: wrap; gap: 30px; margin: 30px 0;">
            <div style="flex: 1; min-width: 300px;">
                <h3>ที่อยู่ไปรษณีย์</h3>
                <p>{!! str_replace(', ', '<br>', $content->address) !!}</p>
                
                <h3 style="margin-top: 20px;">ข้อมูลการติดต่อ</h3>
                <p><strong>โทรศัพท์:</strong> {{ $content->phone }}<br>
                <strong>อีเมล:</strong> {{ $content->email }}<br>
                <strong>โทรสาร:</strong> {{ $content->fax }}</p>
                
                <h3 style="margin-top: 20px;">เวลาทำการ</h3>
                <p>
                    @foreach(json_decode($content->office_hours) as $hours)
                        {{ $hours }}<br>
                    @endforeach
                </p>
            </div>
            
            <div style="flex: 1; min-width: 300px;">
                <h3>แผนที่สถานที่</h3>
                <iframe src="{{ $content->map_url }}" width="100%" height="300" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
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
            @php
                $socialMedia = json_decode($content->social_media, true);
            @endphp
            <a href="{{ $socialMedia['facebook'] }}" target="_blank" style="display: inline-block; width: 50px; height: 50px; background-color: #3b5998; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; font-weight: bold;">f</a>
            <a href="{{ $socialMedia['twitter'] }}" target="_blank" style="display: inline-block; width: 50px; height: 50px; background-color: #1da1f2; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; font-weight: bold;">t</a>
            <a href="{{ $socialMedia['linkedin'] }}" target="_blank" style="display: inline-block; width: 50px; height: 50px; background-color: #0077b5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; font-weight: bold;">in</a>
            <a href="{{ $socialMedia['youtube'] }}" target="_blank" style="display: inline-block; width: 50px; height: 50px; background-color: #ff0000; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; font-weight: bold;">y</a>
        </div>
    </section>
    @endif
@endforeach
@endsection