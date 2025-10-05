@extends('layouts.admin')

@section('title', 'จัดการศิษย์เก่า')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">จัดการศิษย์เก่า</h1>
            
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('admin.new-dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> กลับไปยังแดชบอร์ด
                </a>
                <a href="{{ route('admin.new-alumni.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> เพิ่มศิษย์เก่า
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">รายการศิษย์เก่า</h6>
                </div>
                <div class="card-body">
                    @if($alumni->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>ปีที่จบ</th>
                                        <th>ตำแหน่ง</th>
                                        <th>บริษัท</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alumni as $alumnus)
                                        <tr>
                                            <td>{{ $alumnus->sort_order }}</td>
                                            <td>{{ $alumnus->name }}</td>
                                            <td>{{ $alumnus->graduation_year }}</td>
                                            <td>{{ $alumnus->position }}</td>
                                            <td>{{ $alumnus->company }}</td>
                                            <td>
                                                <a href="{{ route('admin.new-alumni.edit', $alumnus->id) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i> แก้ไข
                                                </a>
                                                <form action="{{ route('admin.new-alumni.destroy', $alumnus->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('คุณแน่ใจหรือไม่ที่จะลบรายการนี้?')">
                                                        <i class="fas fa-trash"></i> ลบ
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info">
                            ยังไม่มีรายการศิษย์เก่า
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection