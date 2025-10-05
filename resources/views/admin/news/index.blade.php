@extends('admin.layout')

@section('title', 'News & Events')

@section('actions')
<a href="{{ route('admin.new-news.create') }}" class=
    <i class="fas fa-plus"></i> Add New News/Event
</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">News & Events</h3>
                </div>
                <div class="card-body">
                    @if($newsEvents->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($newsEvents as $item)
                                        <tr>
                                            <td>
                                                <span data-realtime-editable 
                                                      data-content-id="{{ $item->id }}" 
                                                      data-content-type="news" 
                                                      data-field="title" 
                                                      data-original-value="{{ $item->title }}"
                                                      contenteditable="true"
                                                      style="padding: 5px; border: 1px dashed #ccc; border-radius: 3px; cursor: pointer;">
                                                    {{ $item->title }}
                                                </span>
                                            </td>
                                            <td>
                                                <input type="date" 
                                                       data-realtime-editable 
                                                       data-content-id="{{ $item->id }}" 
                                                       data-content-type="news" 
                                                       data-field="date" 
                                                       data-original-value="{{ $item->date->format('Y-m-d') }}"
                                                       value="{{ $item->date->format('Y-m-d') }}"
                                                       style="width: 140px;">
                                            </td>
                                            <td>
                                                <select data-realtime-editable 
                                                        data-content-id="{{ $item->id }}" 
                                                        data-content-type="news" 
                                                        data-field="type" 
                                                        data-original-value="{{ $item->type }}"
                                                        onchange="updateContentRealtime(this)">
                                                    <option value="news" {{ $item->type == 'news' ? 'selected' : '' }}>News</option>
                                                    <option value="event" {{ $item->type == 'event' ? 'selected' : '' }}>Event</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.new-news.edit', $item->id) }}" class="btn btn-sm btn-primary btn-action">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.new-news.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-danger btn-action" onclick="confirmDelete('delete-form-{{ $item->id }}')">
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
                        <p>No news or events found. <a href="{{ route('admin.new-news.create') }}">Create the first one!</a></p>
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