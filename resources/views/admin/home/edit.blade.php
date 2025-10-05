@extends('admin.layout')

@section('title', 'Edit Home Content')

@section('actions')
<a href="{{ route('admin.new-home.index') }}" class="btn btn-secondary">
    <i class="fas fa-arrow-left"></i> Back to List
</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Home Content</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-home.update', $homeContent->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $homeContent->title) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $homeContent->content) }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="section" class="form-label">Section</label>
                            <select class="form-control" id="section" name="section" required>
                                <option value="">Select a section</option>
                                <option value="hero" {{ (old('section', $homeContent->section) == 'hero') ? 'selected' : '' }}>Hero Section</option>
                                <option value="intro" {{ (old('section', $homeContent->section) == 'intro') ? 'selected' : '' }}>Introduction</option>
                                <option value="features" {{ (old('section', $homeContent->section) == 'features') ? 'selected' : '' }}>Features</option>
                                <option value="stats" {{ (old('section', $homeContent->section) == 'stats') ? 'selected' : '' }}>Statistics</option>
                                <option value="testimonials" {{ (old('section', $homeContent->section) == 'testimonials') ? 'selected' : '' }}>Testimonials</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle (optional)</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $homeContent->subtitle) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL (optional)</label>
                            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $homeContent->image) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="list_items" class="form-label">List Items (JSON format, optional)</label>
                            <textarea class="form-control" id="list_items" name="list_items" rows="3">{{ old('list_items', $homeContent->list_items ? json_encode($homeContent->list_items) : '') }}</textarea>
                            <div class="form-text">Enter list items as JSON array, e.g., ["Item 1", "Item 2", "Item 3"]</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="link" class="form-label">Link URL (optional)</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{ old('link', $homeContent->link) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="link_text" class="form-label">Link Text (optional)</label>
                            <input type="text" class="form-control" id="link_text" name="link_text" value="{{ old('link_text', $homeContent->link_text) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="sort_order" class="form-label">Sort Order</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $homeContent->sort_order) }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Home Content</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection