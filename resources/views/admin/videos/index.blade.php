@extends('layouts.admin')

@section('title', 'จัดการวิดีโอแนะนำ')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">จัดการวิดีโอแนะนำ</h1>
            
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('admin.new-dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> กลับไปยังแดชบอร์ด
                </a>
                <a href="{{ route('admin.new-videos.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> เพิ่มวิดีโอ
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
                    <h6 class="m-0 font-weight-bold text-primary">รายการวิดีโอ</h6>
                </div>
                <div class="card-body">
                    @if($videos->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อวิดีโอ</th>
                                        <th>ลิงก์ YouTube</th>
                                        <th>วิดีโอหลัก</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($videos as $video)
                                        <tr>
                                            <td>{{ $video->sort_order }}</td>
                                            <td>{{ $video->title }}</td>
                                            <td>{{ $video->youtube_link }}</td>
                                            <td>
                                                @if($video->is_primary)
                                                    <span class="badge badge-success">ใช่</span>
                                                @else
                                                    <span class="badge badge-secondary">ไม่ใช่</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.new-videos.edit', $video->id) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i> แก้ไข
                                                </a>
                                                <form action="{{ route('admin.new-videos.destroy', $video->id) }}" method="POST" class="d-inline">
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
                            ยังไม่มีรายการวิดีโอ
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection