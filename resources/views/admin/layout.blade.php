<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .nav-link {
            color: rgba(255, 255, 255, 0.75);
        }
        .nav-link:hover, .nav-link.active {
            color: white;
            background-color: #495057;
        }
        .card {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border: 1px solid rgba(0, 0, 0, 0.125);
        }
        .btn-action {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <h5 class="text-center mb-4">Admin Panel</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-dashboard') ? 'active' : '' }}" href="{{ route('admin.new-dashboard') }}">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-home.*') ? 'active' : '' }}" href="{{ route('admin.new-home.index') }}">
                                <i class="fas fa-home me-2"></i>Home Content
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-about.*') ? 'active' : '' }}" href="{{ route('admin.new-about.index') }}">
                                <i class="fas fa-info-circle me-2"></i>About Content
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-courses.*') ? 'active' : '' }}" href="{{ route('admin.new-courses.index') }}">
                                <i class="fas fa-graduation-cap me-2"></i>Courses Content
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-faculty.*') ? 'active' : '' }}" href="{{ route('admin.new-faculty.index') }}">
                                <i class="fas fa-chalkboard-teacher me-2"></i>Faculty
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-contact.*') ? 'active' : '' }}" href="{{ route('admin.new-contact.index') }}">
                                <i class="fas fa-envelope me-2"></i>Contact Content
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-news.*') ? 'active' : '' }}" href="{{ route('admin.new-news.index') }}">
                                <i class="fas fa-newspaper me-2"></i>News & Events
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-student-achievements.*') ? 'active' : '' }}" href="{{ route('admin.new-student-achievements.index') }}">
                                <i class="fas fa-trophy me-2"></i>Student Achievements
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-alumni.*') ? 'active' : '' }}" href="{{ route('admin.new-alumni.index') }}">
                                <i class="fas fa-graduation-cap me-2"></i>Alumni
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.new-videos.*') ? 'active' : '' }}" href="{{ route('admin.new-videos.index') }}">
                                <i class="fas fa-video me-2"></i>Videos
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('se.home') }}">
                                <i class="fas fa-globe me-2"></i>View Website
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('title', 'Dashboard')</h1>
                    @yield('actions')
                </div>

                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Thai Success Message Display (Project Specification) -->
                @if(session('success') === 'ลบสำเร็จ')
                    <div class="alert alert-success" role="alert" style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 9999;">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Error Messages -->
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Content -->
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/realtime-edit.js') }}"></script>
    <script>
        // Confirm deletion
        function confirmDelete(formId) {
            if (confirm('Are you sure you want to delete this item? This action cannot be undone.')) {
                document.getElementById(formId).submit();
            }
        }
    </script>
    @yield('scripts')
</body>
</html>