<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Product model removed
use App\Models\UMKM;
use App\Models\Content;

class HomeController extends Controller
{
    public function index()
    {
        // Get content for different sections
        $heroContent = Content::where('type', 'hero')->where('is_active', true)->first();
        $aboutContent = Content::where('type', 'about')->where('is_active', true)->first();
        $featuresContent = Content::where('type', 'features')->where('is_active', true)->first();
        $materialsContent = Content::where('type', 'materials')->where('is_active', true)->first();
        $processContent = Content::where('type', 'process')->where('is_active', true)->first();
        $contactContent = Content::where('type', 'contact')->where('is_active', true)->first();
        $testimonialsContent = Content::where('type', 'testimonials')->where('is_active', true)->first();
        $galleryContent = Content::where('type', 'gallery')->where('is_active', true)->first();
        $videoContent = Content::where('type', 'video')->where('is_active', true)->first();

        // Get featured UMKM (replacing products)
        $featuredUMKM = UMKM::where('is_active', true)
            ->latest()
            ->take(6)
            ->get();

        // Get additional featured UMKM for different sections
        $additionalUMKM = UMKM::where('is_active', true)
            ->latest()
            ->skip(6)
            ->take(4)
            ->get();

        return view('home', compact(
            'heroContent',
            'aboutContent', 
            'featuresContent',
            'materialsContent',
            'processContent',
            'contactContent',
            'testimonialsContent',
            'galleryContent',
            'videoContent',
            'featuredUMKM',
            'additionalUMKM'
        ));
    }
} 