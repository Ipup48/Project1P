<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\AboutContent;
use App\Models\CoursesContent;
use App\Models\HomeContent;
use App\Models\ContactContent;

class SEController extends Controller
{
    public function index()
    {
        return view('se.index');
    }
    
    public function about()
    {
        $aboutContent = AboutContent::orderBy('sort_order')->get();
        return view('se.about', compact('aboutContent'));
    }
    
    public function courses()
    {
        $coursesContent = CoursesContent::orderBy('sort_order')->get();
        return view('se.courses', compact('coursesContent'));
    }
    
    public function faculty()
    {
        $faculty = Faculty::where('type', 'faculty')->orderBy('sort_order')->get();
        $specialFaculty = Faculty::where('type', 'special')->orderBy('sort_order')->get();
        return view('se.faculty', compact('faculty', 'specialFaculty'));
    }
    
    public function contact()
    {
        $contactContent = ContactContent::orderBy('sort_order')->get();
        return view('se.contact', compact('contactContent'));
    }
}
