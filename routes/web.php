<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SEController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;

// Make the root route redirect to the home page
Route::get('/', function () {
    return redirect()->route('se.home');
});

// Software Engineering Website Routes
Route::get('/se', function () {
    $homeContent = \App\Models\HomeContent::orderBy('sort_order')->get();
    return view('se.home', compact('homeContent'));
})->name('se.home');
Route::get('/se/about', [SEController::class, 'about'])->name('se.about');
Route::get('/se/courses', [SEController::class, 'courses'])->name('se.courses');
Route::get('/se/faculty', [SEController::class, 'faculty'])->name('se.faculty');
Route::get('/se/contact', [SEController::class, 'contact'])->name('se.contact');
Route::get('/se/news', [NewsController::class, 'index'])->name('se.news');
Route::get('/se/news/{id}', [NewsController::class, 'show'])->name('se.news.show');

// Admin Authentication Routes
Route::get('/admin/login', function () {
    return view('auth.admin-login');
})->name('admin.login');

Route::post('/admin/login', function () {
    $credentials = request()->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // Check if user exists and is admin
    $user = \App\Models\User::where('email', $credentials['email'])->first();
    
    if ($user && $user->is_admin && \Illuminate\Support\Facades\Auth::attempt($credentials, false)) {
        request()->session()->regenerate();
        return redirect()->intended(route('admin.new-dashboard'));
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records or you do not have admin privileges.',
    ])->withInput(request()->only('email'));
})->name('admin.login.attempt');

Route::post('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Admin Routes - Following project convention: prefixed with '/admin/new/'
Route::middleware('admin')->prefix('admin/new')->group(function () {
    // Admin Dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.new-dashboard');
    
    // About Content Routes
    Route::get('/about', [AdminController::class, 'aboutIndex'])->name('admin.new-about.index');
    Route::get('/about/create', [AdminController::class, 'aboutCreate'])->name('admin.new-about.create');
    Route::post('/about', [AdminController::class, 'aboutStore'])->name('admin.new-about.store');
    Route::get('/about/{id}/edit', [AdminController::class, 'aboutEdit'])->name('admin.new-about.edit');
    Route::put('/about/{id}', [AdminController::class, 'aboutUpdate'])->name('admin.new-about.update');
    Route::put('/about/{id}/realtime', [AdminController::class, 'aboutUpdateRealtime'])->name('admin.new-about.update.realtime');
    Route::delete('/about/{id}', [AdminController::class, 'aboutDestroy'])->name('admin.new-about.destroy');
    
    // Home Content Routes
    Route::get('/home', [AdminController::class, 'homeIndex'])->name('admin.new-home.index');
    Route::get('/home/create', [AdminController::class, 'homeCreate'])->name('admin.new-home.create');
    Route::post('/home', [AdminController::class, 'homeStore'])->name('admin.new-home.store');
    Route::get('/home/{id}/edit', [AdminController::class, 'homeEdit'])->name('admin.new-home.edit');
    Route::put('/home/{id}', [AdminController::class, 'homeUpdate'])->name('admin.new-home.update');
    Route::put('/home/{id}/realtime', [AdminController::class, 'homeUpdateRealtime'])->name('admin.new-home.update.realtime');
    Route::delete('/home/{id}', [AdminController::class, 'homeDestroy'])->name('admin.new-home.destroy');
    
    // Courses Content Routes
    Route::get('/courses', [AdminController::class, 'coursesIndex'])->name('admin.new-courses.index');
    Route::get('/courses/create', [AdminController::class, 'coursesCreate'])->name('admin.new-courses.create');
    Route::post('/courses', [AdminController::class, 'coursesStore'])->name('admin.new-courses.store');
    Route::get('/courses/{id}/edit', [AdminController::class, 'coursesEdit'])->name('admin.new-courses.edit');
    Route::put('/courses/{id}', [AdminController::class, 'coursesUpdate'])->name('admin.new-courses.update');
    Route::put('/courses/{id}/realtime', [AdminController::class, 'coursesUpdateRealtime'])->name('admin.new-courses.update.realtime');
    Route::delete('/courses/{id}', [AdminController::class, 'coursesDestroy'])->name('admin.new-courses.destroy');
    
    // Contact Content Routes
    Route::get('/contact', [AdminController::class, 'contactIndex'])->name('admin.new-contact.index');
    Route::get('/contact/create', [AdminController::class, 'contactCreate'])->name('admin.new-contact.create');
    Route::post('/contact', [AdminController::class, 'contactStore'])->name('admin.new-contact.store');
    Route::get('/contact/{id}/edit', [AdminController::class, 'contactEdit'])->name('admin.new-contact.edit');
    Route::put('/contact/{id}', [AdminController::class, 'contactUpdate'])->name('admin.new-contact.update');
    Route::put('/contact/{id}/realtime', [AdminController::class, 'contactUpdateRealtime'])->name('admin.new-contact.update.realtime');
    Route::delete('/contact/{id}', [AdminController::class, 'contactDestroy'])->name('admin.new-contact.destroy');
    
    // Faculty Routes
    Route::get('/faculty', [AdminController::class, 'facultyIndex'])->name('admin.new-faculty.index');
    Route::get('/faculty/create', [AdminController::class, 'facultyCreate'])->name('admin.new-faculty.create');
    Route::post('/faculty', [AdminController::class, 'facultyStore'])->name('admin.new-faculty.store');
    Route::get('/faculty/{id}/edit', [AdminController::class, 'facultyEdit'])->name('admin.new-faculty.edit');
    Route::put('/faculty/{id}', [AdminController::class, 'facultyUpdate'])->name('admin.new-faculty.update');
    Route::put('/faculty/{id}/realtime', [AdminController::class, 'facultyUpdateRealtime'])->name('admin.new-faculty.update.realtime');
    Route::delete('/faculty/{id}', [AdminController::class, 'facultyDestroy'])->name('admin.new-faculty.destroy');
    
    // News & Events Routes
    Route::get('/news', [AdminController::class, 'newsIndex'])->name('admin.new-news.index');
    Route::get('/news/create', [AdminController::class, 'newsCreate'])->name('admin.new-news.create');
    Route::post('/news', [AdminController::class, 'newsStore'])->name('admin.new-news.store');
    Route::get('/news/{id}/edit', [AdminController::class, 'newsEdit'])->name('admin.new-news.edit');
    Route::put('/news/{id}', [AdminController::class, 'newsUpdate'])->name('admin.new-news.update');
    Route::put('/news/{id}/realtime', [AdminController::class, 'newsUpdateRealtime'])->name('admin.new-news.update.realtime');
    Route::delete('/news/{id}', [AdminController::class, 'newsDestroy'])->name('admin.new-news.destroy');
    
    // Faculty Achievements Routes
    Route::get('/faculty/{facultyId}/achievements', [AdminController::class, 'facultyAchievementsIndex'])->name('admin.new-faculty.achievements.index');
    Route::get('/faculty/{facultyId}/achievements/create', [AdminController::class, 'facultyAchievementsCreate'])->name('admin.new-faculty.achievements.create');
    Route::post('/faculty/{facultyId}/achievements', [AdminController::class, 'facultyAchievementsStore'])->name('admin.new-faculty.achievements.store');
    Route::get('/faculty/{facultyId}/achievements/{id}/edit', [AdminController::class, 'facultyAchievementsEdit'])->name('admin.new-faculty.achievements.edit');
    Route::put('/faculty/{facultyId}/achievements/{id}', [AdminController::class, 'facultyAchievementsUpdate'])->name('admin.new-faculty.achievements.update');
    Route::delete('/faculty/{facultyId}/achievements/{id}', [AdminController::class, 'facultyAchievementsDestroy'])->name('admin.new-faculty.achievements.destroy');
    
    // Student Achievements Routes
    Route::get('/student-achievements', [AdminController::class, 'studentAchievementsIndex'])->name('admin.new-student-achievements.index');
    Route::get('/student-achievements/create', [AdminController::class, 'studentAchievementsCreate'])->name('admin.new-student-achievements.create');
    Route::post('/student-achievements', [AdminController::class, 'studentAchievementsStore'])->name('admin.new-student-achievements.store');
    Route::get('/student-achievements/{id}/edit', [AdminController::class, 'studentAchievementsEdit'])->name('admin.new-student-achievements.edit');
    Route::put('/student-achievements/{id}', [AdminController::class, 'studentAchievementsUpdate'])->name('admin.new-student-achievements.update');
    Route::delete('/student-achievements/{id}', [AdminController::class, 'studentAchievementsDestroy'])->name('admin.new-student-achievements.destroy');
    
    // Alumni Routes
    Route::get('/alumni', [AdminController::class, 'alumniIndex'])->name('admin.new-alumni.index');
    Route::get('/alumni/create', [AdminController::class, 'alumniCreate'])->name('admin.new-alumni.create');
    Route::post('/alumni', [AdminController::class, 'alumniStore'])->name('admin.new-alumni.store');
    Route::get('/alumni/{id}/edit', [AdminController::class, 'alumniEdit'])->name('admin.new-alumni.edit');
    Route::put('/alumni/{id}', [AdminController::class, 'alumniUpdate'])->name('admin.new-alumni.update');
    Route::delete('/alumni/{id}', [AdminController::class, 'alumniDestroy'])->name('admin.new-alumni.destroy');
    
    // Videos Routes
    Route::get('/videos', [AdminController::class, 'videosIndex'])->name('admin.new-videos.index');
    Route::get('/videos/create', [AdminController::class, 'videosCreate'])->name('admin.new-videos.create');
    Route::post('/videos', [AdminController::class, 'videosStore'])->name('admin.new-videos.store');
    Route::get('/videos/{id}/edit', [AdminController::class, 'videosEdit'])->name('admin.new-videos.edit');
    Route::put('/videos/{id}', [AdminController::class, 'videosUpdate'])->name('admin.new-videos.update');
    Route::delete('/videos/{id}', [AdminController::class, 'videosDestroy'])->name('admin.new-videos.destroy');
});