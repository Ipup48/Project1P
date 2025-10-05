@extends('se.layout')

@section('title', 'Forbidden')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">403 - Forbidden</div>
                <div class="card-body text-center">
                    <h1 class="display-1">403</h1>
                    <p class="lead">You don't have permission to access this resource.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection