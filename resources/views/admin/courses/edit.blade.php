@extends('admin.layout')

@section('title', 'Edit Courses Content')

@section('actions')
<a href="{{ route('admin.new-courses.index') }}" class="btn btn-secondary">
    <i class="fas fa-arrow-left"></i> Back to List
</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Courses Content</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-courses.update', $coursesContent->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $coursesContent->title) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $coursesContent->content) }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="section" class="form-label">Section</label>
                            <select class="form-control" id="section" name="section" required>
                                <option value="">Select a section</option>
                                <option value="overview" {{ (old('section', $coursesContent->section) == 'overview') ? 'selected' : '' }}>Overview</option>
                                <option value="curriculum" {{ (old('section', $coursesContent->section) == 'curriculum') ? 'selected' : '' }}>Curriculum</option>
                                <option value="requirements" {{ (old('section', $coursesContent->section) == 'requirements') ? 'selected' : '' }}>Requirements</option>
                                <option value="career" {{ (old('section', $coursesContent->section) == 'career') ? 'selected' : '' }}>Career Opportunities</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle (optional)</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $coursesContent->subtitle) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL (optional)</label>
                            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $coursesContent->image) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="list_items" class="form-label">List Items (JSON format, optional)</label>
                            <textarea class="form-control" id="list_items" name="list_items" rows="3">{{ old('list_items', $coursesContent->list_items ? json_encode($coursesContent->list_items) : '') }}</textarea>
                            <div class="form-text">Enter list items as JSON array, e.g., ["Item 1", "Item 2", "Item 3"]</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="year" class="form-label">Year (optional)</label>
                            <input type="number" class="form-control" id="year" name="year" value="{{ old('year', $coursesContent->year) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="sort_order" class="form-label">Sort Order</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $coursesContent->sort_order) }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Courses Content</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection