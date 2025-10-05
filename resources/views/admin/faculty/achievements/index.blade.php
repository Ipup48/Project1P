@extends('layouts.admin')

@section('title', 'จัดการผลงานอาจารย์')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">จัดการผลงานอาจารย์</h1>
            <h2 class="h4 mb-4 text-gray-700">{{ $faculty->name }}</h2>
            
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('admin.new-faculty.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> กลับไปยังรายการอาจารย์
                </a>
                <a href="{{ route('admin.new-faculty.achievements.create', $faculty->id) }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> เพิ่มผลงาน
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
                    <h6 class="m-0 font-weight-bold text-primary">รายการผลงาน</h6>
                </div>
                <div class="card-body">
                    @if($achievements->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อผลงาน</th>
                                        <th>วันที่</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($achievements as $achievement)
                                        <tr>
                                            <td>{{ $achievement->sort_order }}</td>
                                            <td>{{ $achievement->title }}</td>
                                            <td>{{ $achievement->date ? $achievement->date->format('d/m/Y') : '-' }}</td>
                                            <td>
                                                <a href="{{ route('admin.new-faculty.achievements.edit', [$faculty->id, $achievement->id]) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i> แก้ไข
                                                </a>
                                                <form action="{{ route('admin.new-faculty.achievements.destroy', [$faculty->id, $achievement->id]) }}" method="POST" class="d-inline">
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
                            ยังไม่มีรายการผลงาน
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection