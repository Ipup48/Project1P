<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsEvent;

class NewsController extends Controller
{
    public function index()
    {
        // Fetch news and events from database, sorted by date (newest first)
        $newsAndEvents = NewsEvent::orderBy('date', 'desc')->get();
        
        return view('se.news', [
            'newsAndEvents' => $newsAndEvents
        ]);
    }

    public function show($id)
    {
        // Find the news/event by ID
        $item = NewsEvent::find($id);
        
        if (!$item) {
            abort(404);
        }
        
        return view('se.news-detail', [
            'item' => $item
        ]);
    }
}