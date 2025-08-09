<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class AboutController extends Controller
{
    public function index()
    {
        // Get content for about page
        $aboutContent = Content::where('type', 'about')->where('is_active', true)->first();
        $featuresContent = Content::where('type', 'features')->where('is_active', true)->first();
        $materialsContent = Content::where('type', 'materials')->where('is_active', true)->first();
        $processContent = Content::where('type', 'process')->where('is_active', true)->first();
        $testimonialsContent = Content::where('type', 'testimonials')->where('is_active', true)->first();

        return view('about', compact(
            'aboutContent',
            'featuresContent',
            'materialsContent',
            'processContent',
            'testimonialsContent'
        ));
    }
} 