@extends('admin.layout')

@section('title', 'Create Courses Content')

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
                    <h3 class="card-title">Create New Courses Content</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-courses.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5">{{ old('content') }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="section" class="form-label">Section</label>
                            <select class="form-control" id="section" name="section" required>
                                <option value="">Select a section</option>
                                <option value="overview" {{ old('section') == 'overview' ? 'selected' : '' }}>Overview</option>
                                <option value="curriculum" {{ old('section') == 'curriculum' ? 'selected' : '' }}>Curriculum</option>
                                <option value="requirements" {{ old('section') == 'requirements' ? 'selected' : '' }}>Requirements</option>
                                <option value="career" {{ old('section') == 'career' ? 'selected' : '' }}>Career Opportunities</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle (optional)</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL (optional)</label>
                            <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="list_items" class="form-label">List Items (JSON format, optional)</label>
                            <textarea class="form-control" id="list_items" name="list_items" rows="3">{{ old('list_items') }}</textarea>
                            <div class="form-text">Enter list items as JSON array, e.g., ["Item 1", "Item 2", "Item 3"]</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="year" class="form-label">Year (optional)</label>
                            <input type="number" class="form-control" id="year" name="year" value="{{ old('year') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="sort_order" class="form-label">Sort Order</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Create Courses Content</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection