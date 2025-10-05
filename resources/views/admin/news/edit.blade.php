@extends('admin.layout')

@section('title', 'Edit News/Event')

@section('actions')
<a href="{{ route('admin.new-news.index') }}" class="btn btn-secondary">
    <i class="fas fa-arrow-left"></i> Back to List
</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit News/Event</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-news.update', $newsEvent->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $newsEvent->title) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $newsEvent->description) }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $newsEvent->date->format('Y-m-d')) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="">Select a type</option>
                                <option value="news" {{ (old('type', $newsEvent->type) == 'news') ? 'selected' : '' }}>News</option>
                                <option value="event" {{ (old('type', $newsEvent->type) == 'event') ? 'selected' : '' }}>Event</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL (optional)</label>
                            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $newsEvent->image) }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update News/Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection