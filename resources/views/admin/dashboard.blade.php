@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Welcome to the Admin Dashboard</h2>
            <p>Use the navigation menu to manage different sections of the website.</p>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-home fa-3x text-primary mb-3"></i>
                    <h5>Home Content</h5>
                    <p class="card-text">Manage the content displayed on the home page.</p>
                    <a href="{{ route('admin.new-home.index') }}" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-info-circle fa-3x text-info mb-3"></i>
                    <h5>About Content</h5>
                    <p class="card-text">Manage the content displayed on the about page.</p>
                    <a href="{{ route('admin.new-about.index') }}" class="btn btn-info">Manage</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-graduation-cap fa-3x text-success mb-3"></i>
                    <h5>Courses Content</h5>
                    <p class="card-text">Manage the content displayed on the courses page.</p>
                    <a href="{{ route('admin.new-courses.index') }}" class="btn btn-success">Manage</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-chalkboard-teacher fa-3x text-warning mb-3"></i>
                    <h5>Faculty</h5>
                    <p class="card-text">Manage faculty members and special faculty.</p>
                    <a href="{{ route('admin.new-faculty.index') }}" class="btn btn-warning">Manage</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-trophy fa-3x text-success mb-3"></i>
                    <h5>Student Achievements</h5>
                    <p class="card-text">Manage student achievements and awards.</p>
                    <a href="{{ route('admin.new-student-achievements.index') }}" class="btn btn-success">Manage</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-graduation-cap fa-3x text-info mb-3"></i>
                    <h5>Alumni</h5>
                    <p class="card-text">Manage alumni information and profiles.</p>
                    <a href="{{ route('admin.new-alumni.index') }}" class="btn btn-info">Manage</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-video fa-3x text-primary mb-3"></i>
                    <h5>Videos</h5>
                    <p class="card-text">Manage recommendation videos and YouTube links.</p>
                    <a href="{{ route('admin.new-videos.index') }}" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-envelope fa-3x text-secondary mb-3"></i>
                    <h5>Contact Content</h5>
                    <p class="card-text">Manage the content displayed on the contact page.</p>
                    <a href="{{ route('admin.new-contact.index') }}" class="btn btn-secondary">Manage</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-newspaper fa-3x text-danger mb-3"></i>
                    <h5>News & Events</h5>
                    <p class="card-text">Manage news and events displayed on the website.</p>
                    <a href="{{ route('admin.new-news.index') }}" class="btn btn-danger">Manage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection