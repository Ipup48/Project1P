<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SEController;
use App\Http\Controllers\NewsController;
use App\Models\HomeContent;

// Make the Software Engineering home page the default route
Route::get('/', function () {
    $homeContent = \App\Models\HomeContent::orderBy('sort_order')->get();
    return view('se.home', compact('homeContent'));
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