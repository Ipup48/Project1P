@extends('layouts.admin')

@section('title', 'เพิ่มผลงานนักศึกษา')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">เพิ่มผลงานนักศึกษา</h1>
            
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('admin.new-student-achievements.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> กลับไปยังรายการผลงานนักศึกษา
                </a>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">ฟอร์มเพิ่มผลงานนักศึกษา</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-student-achievements.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">ชื่อผลงาน *</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">รายละเอียด</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="image">ลิงก์รูปภาพ</label>
                            <input type="text" class="form-control" id="image" name="image">
                        </div>
                        
                        <div class="form-group">
                            <label for="link">ลิงก์เพิ่มเติม</label>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>
                        
                        <div class="form-group">
                            <label for="date">วันที่</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        
                        <div class="form-group">
                            <label for="sort_order">ลำดับ</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="0" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="{{ route('admin.new-student-achievements.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection