@extends('layouts.admin')

@section('title', 'แก้ไขศิษย์เก่า')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">แก้ไขศิษย์เก่า</h1>
            
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('admin.new-alumni.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> กลับไปยังรายการศิษย์เก่า
                </a>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">ฟอร์มแก้ไขศิษย์เก่า</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-alumni.update', $alumnus->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">ชื่อ-นามสกุล *</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $alumnus->name) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="graduation_year">ปีที่จบ *</label>
                            <input type="text" class="form-control" id="graduation_year" name="graduation_year" value="{{ old('graduation_year', $alumnus->graduation_year) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="position">ตำแหน่ง *</label>
                            <input type="text" class="form-control" id="position" name="position" value="{{ old('position', $alumnus->position) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="company">บริษัท</label>
                            <input type="text" class="form-control" id="company" name="company" value="{{ old('company', $alumnus->company) }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="bio">ข้อมูลเพิ่มเติม</label>
                            <textarea class="form-control" id="bio" name="bio" rows="4">{{ old('bio', $alumnus->bio) }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="image">ลิงก์รูปภาพ</label>
                            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $alumnus->image) }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">อีเมล</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $alumnus->email) }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="linkedin">ลิงก์ LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin', $alumnus->linkedin) }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="sort_order">ลำดับ</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $alumnus->sort_order) }}" required>
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