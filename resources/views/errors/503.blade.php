@extends('se.layout')

@section('title', 'Service Unavailable')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">503 - Service Unavailable</div>
                <div class="card-body text-center">
                    <h1 class="display-1">503</h1>
                    <p class="lead">The application is currently under maintenance. Please check back later.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection