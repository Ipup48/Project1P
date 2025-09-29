<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SEController extends Controller
{
    public function index()
    {
        return view('se.index');
    }
    
    public function about()
    {
        return view('se.about');
    }
    
    public function courses()
    {
        return view('se.courses');
    }
    
    public function faculty()
    {
        return view('se.faculty');
    }
    
    public function contact()
    {
        return view('se.contact');
    }
}