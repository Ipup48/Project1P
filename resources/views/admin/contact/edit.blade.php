@extends('admin.layout')

@section('title', 'Edit Contact Content')

@section('actions')
<a href="{{ route('admin.new-contact.index') }}" class="btn btn-secondary">
    <i class="fas fa-arrow-left"></i> Back to List
</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Contact Content</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-contact.update', $contactContent->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $contactContent->title) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $contactContent->content) }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="section" class="form-label">Section</label>
                            <select class="form-control" id="section" name="section" required>
                                <option value="">Select a section</option>
                                <option value="info" {{ (old('section', $contactContent->section) == 'info') ? 'selected' : '' }}>Contact Information</option>
                                <option value="form" {{ (old('section', $contactContent->section) == 'form') ? 'selected' : '' }}>Contact Form</option>
                                <option value="map" {{ (old('section', $contactContent->section) == 'map') ? 'selected' : '' }}>Map</option>
                                <option value="hours" {{ (old('section', $contactContent->section) == 'hours') ? 'selected' : '' }}>Office Hours</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="address" class="form-label">Address (optional)</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $contactContent->address) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone (optional)</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contactContent->phone) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email (optional)</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contactContent->email) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="fax" class="form-label">Fax (optional)</label>
                            <input type="text" class="form-control" id="fax" name="fax" value="{{ old('fax', $contactContent->fax) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL (optional)</label>
                            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $contactContent->image) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="map_url" class="form-label">Map URL (optional)</label>
                            <input type="text" class="form-control" id="map_url" name="map_url" value="{{ old('map_url', $contactContent->map_url) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="sort_order" class="form-label">Sort Order</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $contactContent->sort_order) }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Contact Content</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection