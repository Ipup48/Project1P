@extends('layouts.admin')

@section('title', 'เพิ่มวิดีโอแนะนำ')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">เพิ่มวิดีโอแนะนำ</h1>
            
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('admin.new-videos.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> กลับไปยังรายการวิดีโอ
                </a>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">ฟอร์มเพิ่มวิดีโอ</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-videos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">ชื่อวิดีโอ *</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">รายละเอียด</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="youtube_link">ลิงก์ YouTube *</label>
                            <input type="text" class="form-control" id="youtube_link" name="youtube_link" required>
                            <small class="form-text text-muted">ตัวอย่าง: https://www.youtube.com/watch?v=XXXXXXXXXXX หรือ https://youtu.be/XXXXXXXXXXX</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="image">ลิงก์รูปภาพ</label>
                            <input type="text" class="form-control" id="image" name="image">
                        </div>
                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="is_primary" name="is_primary" value="1">
                            <label class="form-check-label" for="is_primary">กำหนดให้เป็นวิดีโอหลัก</label>
                        </div>
                        
                        <div class="form-group">
                            <label for="sort_order">ลำดับ</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="0" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="{{ route('admin.new-videos.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection