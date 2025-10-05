@extends('admin.layout')

@section('title', 'Faculty')

@section('actions')
<a href="{{ route('admin.new-faculty.create') }}" class=
    <i class="fas fa-plus"></i> Add New Faculty Member
</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Faculty Members</h3>
                </div>
                <div class="card-body">
                    @if($faculties->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Type</th>
                                        <th>Sort Order</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($faculties as $faculty)
                                        <tr>
                                            <td>
                                                <span data-realtime-editable 
                                                      data-content-id="{{ $faculty->id }}" 
                                                      data-content-type="faculty" 
                                                      data-field="name" 
                                                      data-original-value="{{ $faculty->name }}"
                                                      contenteditable="true"
                                                      style="padding: 5px; border: 1px dashed #ccc; border-radius: 3px; cursor: pointer;">
                                                    {{ $faculty->name }}
                                                </span>
                                            </td>
                                            <td>
                                                <span data-realtime-editable 
                                                      data-content-id="{{ $faculty->id }}" 
                                                      data-content-type="faculty" 
                                                      data-field="position" 
                                                      data-original-value="{{ $faculty->position }}"
                                                      contenteditable="true"
                                                      style="padding: 5px; border: 1px dashed #ccc; border-radius: 3px; cursor: pointer;">
                                                    {{ $faculty->position }}
                                                </span>
                                            </td>
                                            <td>
                                                <select data-realtime-editable 
                                                        data-content-id="{{ $faculty->id }}" 
                                                        data-content-type="faculty" 
                                                        data-field="type" 
                                                        data-original-value="{{ $faculty->type }}"
                                                        onchange="updateContentRealtime(this)">
                                                    <option value="faculty" {{ $faculty->type == 'faculty' ? 'selected' : '' }}>Faculty</option>
                                                    <option value="special" {{ $faculty->type == 'special' ? 'selected' : '' }}>Special Faculty</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" 
                                                       data-realtime-editable 
                                                       data-content-id="{{ $faculty->id }}" 
                                                       data-content-type="faculty" 
                                                       data-field="sort_order" 
                                                       data-original-value="{{ $faculty->sort_order }}"
                                                       value="{{ $faculty->sort_order }}"
                                                       style="width: 80px;">
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.new-faculty.edit', $faculty->id) }}" class="btn btn-sm btn-primary btn-action">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="{{ route('admin.new-faculty.achievements.index', $faculty->id) }}" class="btn btn-sm btn-info btn-action">
                                                    <i class="fas fa-trophy"></i> Achievements
                                                </a>
                                                <form id="delete-form-{{ $faculty->id }}" action="{{ route('admin.new-faculty.destroy', $faculty->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-danger btn-action" onclick="confirmDelete('delete-form-{{ $faculty->id }}')">
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
                        <p>No faculty members found. <a href="{{ route('admin.new-faculty.create') }}">Create the first one!</a></p>
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