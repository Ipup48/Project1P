@extends('admin.layout')

@section('title', 'Edit Faculty Member')

@section('actions')
<a href="{{ route('admin.new-faculty.index') }}" class="btn btn-secondary">
    <i class="fas fa-arrow-left"></i> Back to List
</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Faculty Member</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.new-faculty.update', $faculty->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $faculty->name) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="position" value="{{ old('position', $faculty->position) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="bio" class="form-label">Description</label>
                            <textarea class="form-control" id="bio" name="bio" rows="5">{{ old('bio', $faculty->description) }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL (optional)</label>
                            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $faculty->image) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="">Select a type</option>
                                <option value="faculty" {{ (old('type', $faculty->type) == 'faculty') ? 'selected' : '' }}>Faculty</option>
                                <option value="special" {{ (old('type', $faculty->type) == 'special') ? 'selected' : '' }}>Special Faculty</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="sort_order" class="form-label">Sort Order</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $faculty->sort_order) }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Faculty Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection