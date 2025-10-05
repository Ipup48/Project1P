@extends('admin.layout')

@section('title', 'Edit About Content')

@section('actions')
<a href="{{ route('admin.new-about.index') }}" class="btn btn-secondary">
    <i class="fas fa-arrow-left"></i> Back to List
</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit About Content</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-about.update', $aboutContent->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $aboutContent->title) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $aboutContent->content) }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="section" class="form-label">Section</label>
                            <select class="form-control" id="section" name="section" required>
                                <option value="">Select a section</option>
                                <option value="overview" {{ (old('section', $aboutContent->section) == 'overview') ? 'selected' : '' }}>Overview</option>
                                <option value="mission" {{ (old('section', $aboutContent->section) == 'mission') ? 'selected' : '' }}>Mission</option>
                                <option value="vision" {{ (old('section', $aboutContent->section) == 'vision') ? 'selected' : '' }}>Vision</option>
                                <option value="general_info" {{ (old('section', $aboutContent->section) == 'general_info') ? 'selected' : '' }}>General Info</option>
                                <option value="careers" {{ (old('section', $aboutContent->section) == 'careers') ? 'selected' : '' }}>Careers</option>
                                <option value="objectives" {{ (old('section', $aboutContent->section) == 'objectives') ? 'selected' : '' }}>Objectives</option>
                                <option value="outcomes" {{ (old('section', $aboutContent->section) == 'outcomes') ? 'selected' : '' }}>Outcomes</option>
                                <option value="history" {{ (old('section', $aboutContent->section) == 'history') ? 'selected' : '' }}>History</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL (optional)</label>
                            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $aboutContent->image) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="list_items" class="form-label">List Items (JSON format, optional)</label>
                            <textarea class="form-control" id="list_items" name="list_items" rows="3">{{ old('list_items', $aboutContent->list_items) }}</textarea>
                            <div class="form-text">Enter list items as JSON array, e.g., ["Item 1", "Item 2", "Item 3"]</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="sort_order" class="form-label">Sort Order</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $aboutContent->sort_order) }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update About Content</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection