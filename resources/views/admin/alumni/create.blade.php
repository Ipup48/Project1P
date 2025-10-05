@extends('layouts.admin')

@section('title', 'เพิ่มศิษย์เก่า')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">เพิ่มศิษย์เก่า</h1>
            
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('admin.new-alumni.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> กลับไปยังรายการศิษย์เก่า
                </a>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">ฟอร์มเพิ่มศิษย์เก่า</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-alumni.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">ชื่อ-นามสกุล *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="graduation_year">ปีที่จบ *</label>
                            <input type="text" class="form-control" id="graduation_year" name="graduation_year" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="position">ตำแหน่ง *</label>
                            <input type="text" class="form-control" id="position" name="position" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="company">บริษัท</label>
                            <input type="text" class="form-control" id="company" name="company">
                        </div>
                        
                        <div class="form-group">
                            <label for="bio">ข้อมูลเพิ่มเติม</label>
                            <textarea class="form-control" id="bio" name="bio" rows="4"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="image">ลิงก์รูปภาพ</label>
                            <input type="text" class="form-control" id="image" name="image">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">อีเมล</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        
                        <div class="form-group">
                            <label for="linkedin">ลิงก์ LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin">
                        </div>
                        
                        <div class="form-group">
                            <label for="sort_order">ลำดับ</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="0" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="{{ route('admin.new-alumni.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection