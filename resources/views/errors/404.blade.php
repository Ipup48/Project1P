@extends('se.layout')

@section('title', 'Page Not Found')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">404 - Page Not Found</div>
                <div class="card-body text-center">
                    <h1 class="display-1">404</h1>
                    <p class="lead">The page you are looking for could not be found.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection