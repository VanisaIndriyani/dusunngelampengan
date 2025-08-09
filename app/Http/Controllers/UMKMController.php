<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMKM;
use App\Models\Content;

class UMKMController extends Controller
{
    public function index()
    {
        // Get all active UMKM
        $umkm = UMKM::where('is_active', true)
            ->latest()
            ->get();

        // Get content for UMKM page
        $umkmContent = Content::where('type', 'gallery')->where('is_active', true)->first();

        return view('umkm', compact('umkm', 'umkmContent'));
    }
} 