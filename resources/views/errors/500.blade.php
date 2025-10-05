@extends('se.layout')

@section('title', 'Server Error')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">500 - Server Error</div>
                <div class="card-body text-center">
                    <h1 class="display-1">500</h1>
                    <p class="lead">Something went wrong on our end. Please try again later.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection