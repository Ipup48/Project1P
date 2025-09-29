@extends('se.layout')

@section('title', 'Home - Software Engineering NPRU')

@section('content')
<div class="page-header">
    <h1>Welcome to Software Engineering Department</h1>
    <p>Nakhon Pathom Rajabhat University</p>
</div>

<section>
    <h2>About Our Program</h2>
    <p>The Software Engineering Department at Nakhon Pathom Rajabhat University offers a comprehensive program designed to prepare students for successful careers in software development, system analysis, and project management. Our curriculum combines theoretical knowledge with practical experience to ensure our graduates are industry-ready.</p>
    
    <div style="text-align: center; margin: 30px 0;">
        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Software Engineering" style="max-width: 100%; height: auto; border-radius: 8px;">
    </div>
    
    <h3>Why Choose Our Program?</h3>
    <ul style="list-style-type: disc; padding-left: 20px; margin: 20px 0;">
        <li>Experienced faculty with industry backgrounds</li>
        <li>Modern computer laboratories with latest software tools</li>
        <li>Hands-on project-based learning approach</li>
        <li>Industry partnerships and internship opportunities</li>
        <li>Focus on emerging technologies and best practices</li>
    </ul>
</section>

<section>
    <h2>Academic Programs</h2>
    <div class="card-container">
        <div class="card">
            <div class="card-content">
                <h3>Bachelor's Degree</h3>
                <p>Our Bachelor of Engineering in Software Engineering program provides a solid foundation in software development principles, algorithms, and system design.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>Master's Degree</h3>
                <p>Advanced studies focusing on software architecture, project management, and research methodologies in software engineering.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>Continuing Education</h3>
                <p>Professional development courses and workshops for industry professionals to stay current with latest technologies.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <h2>Research Areas</h2>
    <div class="card-container">
        <div class="card">
            <div class="card-content">
                <h3>Artificial Intelligence</h3>
                <p>Machine learning, deep learning, and intelligent systems development.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>Mobile Computing</h3>
                <p>Mobile application development for iOS and Android platforms.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>Web Technologies</h3>
                <p>Modern web development frameworks and cloud computing solutions.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <h2>Latest News & Events</h2>
    <div class="card-container">
        <div class="card">
            <div class="card-content">
                <h3>New Curriculum Update</h3>
                <p>Our department has updated the curriculum to include more focus on AI and machine learning technologies.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>Industry Partnership</h3>
                <p>We've partnered with leading tech companies to provide internship opportunities for our students.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h3>Student Achievement</h3>
                <p>Our students won first place in the national software development competition.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <h2>Quick Links</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 15px; margin-top: 20px;">
        <a href="{{ route('se.about') }}" class="btn">Learn More About Us</a>
        <a href="{{ route('se.courses') }}" class="btn" style="background-color: #3498db;">View Courses</a>
        <a href="{{ route('se.contact') }}" class="btn" style="background-color: #2ecc71;">Contact Us</a>
    </div>
</section>
@endsection