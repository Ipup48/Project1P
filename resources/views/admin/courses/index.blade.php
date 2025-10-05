@extends('admin.layout')

@section('title', 'Courses Content')

@section('actions')
<a href="{{ route('admin.new-courses.create') }}" class=
    <i class="fas fa-plus"></i> Add New Courses Content
</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Courses Content List</h3>
                </div>
                <div class="card-body">
                    @if($coursesContents->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Section</th>
                                        <th>Sort Order</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($coursesContents as $content)
                                        <tr>
                                            <td>
                                                <span data-realtime-editable 
                                                      data-content-id="{{ $content->id }}" 
                                                      data-content-type="courses" 
                                                      data-field="title" 
                                                      data-original-value="{{ $content->title }}"
                                                      contenteditable="true"
                                                      style="padding: 5px; border: 1px dashed #ccc; border-radius: 3px; cursor: pointer;">
                                                    {{ $content->title }}
                                                </span>
                                            </td>
                                            <td>
                                                <select data-realtime-editable 
                                                        data-content-id="{{ $content->id }}" 
                                                        data-content-type="courses" 
                                                        data-field="section" 
                                                        data-original-value="{{ $content->section }}"
                                                        onchange="updateContentRealtime(this)">
                                                    <option value="overview" {{ $content->section == 'overview' ? 'selected' : '' }}>Overview</option>
                                                    <option value="core_courses" {{ $content->section == 'core_courses' ? 'selected' : '' }}>Core Courses</option>
                                                    <option value="electives" {{ $content->section == 'electives' ? 'selected' : '' }}>Electives</option>
                                                    <option value="specializations" {{ $content->section == 'specializations' ? 'selected' : '' }}>Specializations</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" 
                                                       data-realtime-editable 
                                                       data-content-id="{{ $content->id }}" 
                                                       data-content-type="courses" 
                                                       data-field="sort_order" 
                                                       data-original-value="{{ $content->sort_order }}"
                                                       value="{{ $content->sort_order }}"
                                                       style="width: 80px;">
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.new-courses.edit', $content->id) }}" class="btn btn-sm btn-primary btn-action">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form id="delete-form-{{ $content->id }}" action="{{ route('admin.new-courses.destroy', $content->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-danger btn-action" onclick="confirmDelete('delete-form-{{ $content->id }}')">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>No courses content found. <a href="{{ route('admin.new-courses.create') }}">Create the first one!</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Reinitialize real-time editing after DOM updates
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof initializeRealtimeEditing === 'function') {
            initializeRealtimeEditing();
        }
    });
</script>
@endpush
@endsection