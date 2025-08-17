@extends('layouts.app')

@section('title', 'Beranda - Dusun Ngelampengan')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-white py-5 position-relative overflow-hidden">
        <div class="hero-bg-overlay"></div>
        <div class="hero-particles"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-10 mx-auto text-center hero-content" data-aos="fade-up" data-aos-duration="1000">
                    <div class="hero-badge mb-4 animate__animated animate__fadeInDown">
                        <span class="badge bg-white text-primary px-4 py-2 fs-6 shadow-sm">
                            <i class="fas fa-star me-2"></i>
                            Dusun Unggulan Kapanewon Dlingo
                        </span>
                    </div>
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInUp">
                        Selamat Datang di <span class="text-white gradient-text">Dusun Ngelampengan</span>
                    </h1>
                    <p class="lead mb-5 fs-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Dusun yang kaya akan sejarah dan budaya, dengan UMKM yang berkembang pesat di wilayah Kapanewon Dlingo, Daerah Istimewa Yogyakarta
                    </p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#features" class="btn btn-white btn-lg px-5 py-3 text-primary shadow-lg hover-lift">
                            <i class="fas fa-star me-2"></i>
                            Keunggulan Kami
                        </a>
                        <a href="{{ route('umkm') }}" class="btn btn-outline-light btn-lg px-5 py-3 hover-lift">
                            <i class="fas fa-store me-2"></i>
                            Lihat UMKM
                        </a>
                    </div>
                    
                    <!-- Stats Section -->
                    <div class="hero-stats d-flex justify-content-center gap-4 mt-5 animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="text-center stat-item">
                            <div class="fw-bold fs-4 counter" data-target="100">0</div>
                            <small class="text-light">Tahun Sejarah</small>
                        </div>
                        <div class="text-center stat-item">
                            <div class="fw-bold fs-4 counter" data-target="500">0</div>
                            <small class="text-light">Penduduk</small>
                        </div>
                        <div class="text-center stat-item">
                            <div class="fw-bold fs-4 counter" data-target="50">0</div>
                            <small class="text-light">UMKM Aktif</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Mobile Responsive CSS -->
    <style>
        /* Ensure navbar consistency across all pages */
        .navbar {
            background: var(--white) !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1) !important;
            z-index: 1030 !important;
        }
        
        .navbar-brand {
            font-weight: 700 !important;
            color: var(--primary-blue) !important;
        }
        
        .navbar-nav .nav-link {
            color: var(--dark-gray) !important;
            font-weight: 500 !important;
            padding: 0.5rem 1rem !important;
            border-radius: 8px !important;
            transition: all 0.3s ease !important;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary-blue) !important;
            background: var(--secondary-blue) !important;
        }
        
        /* Mobile Navigation Improvements */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: var(--white) !important;
                border-radius: 10px !important;
                margin-top: 1rem !important;
                padding: 1rem !important;
                box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
            }
            
            .navbar-nav {
                gap: 0.5rem !important;
            }
            
            .navbar-nav .nav-link {
                text-align: center !important;
                padding: 0.75rem 1rem !important;
                margin: 0.25rem 0 !important;
                border-radius: 10px !important;
                font-weight: 600 !important;
            }
            
            .navbar-nav .nav-link:hover,
            .navbar-nav .nav-link.active {
                background: var(--primary-blue) !important;
                color: var(--white) !important;
                transform: translateY(-2px) !important;
                box-shadow: 0 5px 15px rgba(37, 99, 235, 0.3) !important;
            }
        }
        
        /* Mobile Toggle Button */
        .navbar-toggler {
            border: none !important;
            padding: 0.5rem !important;
            border-radius: 8px !important;
            background: var(--light-blue) !important;
            transition: all 0.3s ease !important;
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25) !important;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(37, 99, 235, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }
        
        /* Logo Styling */
        .navbar-logo {
            position: relative !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }
        
        .logo-bantul, .logo-kelompok {
            height: 40px !important;
            width: auto !important;
            object-fit: contain !important;
            border-radius: 8px !important;
            transition: all 0.3s ease !important;
        }
        
        .logo-bantul {
            background: linear-gradient(135deg, #ffd700, #ffed4e) !important;
            padding: 4px !important;
        }
        
        .logo-kelompok {
            background: linear-gradient(135deg, #1e40af, #3b82f6) !important;
            padding: 4px !important;
        }
        
        .brand-text {
            display: flex !important;
            flex-direction: column !important;
            line-height: 1.2 !important;
        }
        
        .brand-title {
            font-weight: 700 !important;
            font-size: 1.3rem !important;
            color: var(--primary-blue) !important;
        }
        
        .brand-subtitle {
            font-size: 0.7rem !important;
            color: var(--gray) !important;
            font-weight: 500 !important;
        }
        
        /* Responsive logo adjustments */
        @media (max-width: 768px) {
            .logo-bantul, .logo-kelompok {
                height: 35px !important;
            }
            
            .brand-title {
                font-size: 1.1rem !important;
            }
            
            .brand-subtitle {
                font-size: 0.6rem !important;
            }
            
            .navbar-brand {
                padding: 0.5rem 0 !important;
            }
        }
        
        @media (max-width: 576px) {
            .logo-bantul, .logo-kelompok {
                height: 30px !important;
            }
            
            .brand-title {
                font-size: 0.9rem !important;
            }
            
            .brand-subtitle {
                font-size: 0.5rem !important;
            }
            
            .navbar-logo.me-3 {
                margin-right: 0.5rem !important;
            }
            
            .navbar-brand {
                padding: 0.25rem 0 !important;
            }
            
            .navbar {
                padding: 0.5rem 1rem !important;
            }
        }
        
        @media (max-width: 480px) {
            .brand-title {
                font-size: 0.8rem !important;
            }
            
            .brand-subtitle {
                display: none !important;
            }
            
            .logo-bantul, .logo-kelompok {
                height: 25px !important;
            }
        }
        /* Mobile Hero Section */
        @media (max-width: 768px) {
            .hero-section {
                padding: 3rem 0 2rem 0 !important;
                min-height: 60vh !important;
            }
            
            .hero-section h1 {
                font-size: 2rem !important;
                line-height: 1.2;
                margin-bottom: 1.5rem !important;
            }
            
            .hero-section .lead {
                font-size: 1rem !important;
                margin-bottom: 2rem !important;
            }
            
            .hero-badge .badge {
                font-size: 0.9rem !important;
                padding: 0.75rem 1.5rem !important;
            }
            
            .hero-stats {
                flex-direction: column !important;
                gap: 1rem !important;
                margin-top: 2rem !important;
            }
            
            .stat-item {
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
                padding: 0.75rem 1rem !important;
                background: rgba(255,255,255,0.1) !important;
                border-radius: 10px !important;
                backdrop-filter: blur(10px) !important;
                margin-bottom: 0.5rem !important;
            }
            
            .stat-item .fw-bold {
                font-size: 1.5rem !important;
            }
            
            .stat-item small {
                font-size: 0.8rem !important;
            }
            
            .btn-lg {
                padding: 0.75rem 1.5rem !important;
                font-size: 0.9rem !important;
                width: 100% !important;
                margin-bottom: 0.5rem !important;
            }
            
            .d-flex.flex-column.flex-sm-row {
                flex-direction: column !important;
                gap: 0.75rem !important;
            }
        }
        
        @media (max-width: 576px) {
            .hero-section {
                padding: 2rem 0 1.5rem 0 !important;
                min-height: 50vh !important;
            }
            
            .hero-section h1 {
                font-size: 1.75rem !important;
            }
            
            .hero-section .lead {
                font-size: 0.9rem !important;
            }
            
            .hero-badge .badge {
                font-size: 0.8rem !important;
                padding: 0.5rem 1rem !important;
            }
            
            .btn-lg {
                padding: 0.5rem 1rem !important;
                font-size: 0.85rem !important;
            }
            
            .stat-item {
                padding: 0.5rem 0.75rem !important;
            }
            
            .stat-item .fw-bold {
                font-size: 1.25rem !important;
            }
            
            .stat-item small {
                font-size: 0.75rem !important;
            }
        }
        
        /* Mobile Features Section */
        @media (max-width: 768px) {
            .feature-card {
                padding: 1.5rem !important;
                margin-bottom: 1rem !important;
            }
            
            .feature-card h4 {
                font-size: 1.1rem !important;
                margin-bottom: 1rem !important;
            }
            
            .feature-card p {
                font-size: 0.9rem !important;
                line-height: 1.5 !important;
            }
            
            .feature-icon {
                width: 60px !important;
                height: 60px !important;
                font-size: 1.5rem !important;
                margin-bottom: 1rem !important;
            }
            
            .display-4 {
                font-size: 2rem !important;
                line-height: 1.2 !important;
            }
            
            .lead {
                font-size: 1rem !important;
            }
            
            .section-badge .badge {
                font-size: 0.9rem !important;
                padding: 0.75rem 1.5rem !important;
            }
        }
        
        @media (max-width: 576px) {
            .feature-card {
                padding: 1rem !important;
            }
            
            .feature-card h4 {
                font-size: 1rem !important;
            }
            
            .feature-card p {
                font-size: 0.85rem !important;
            }
            
            .feature-icon {
                width: 50px !important;
                height: 50px !important;
                font-size: 1.25rem !important;
            }
            
            .display-4 {
                font-size: 1.75rem !important;
            }
            
            .section-badge .badge {
                font-size: 0.8rem !important;
                padding: 0.5rem 1rem !important;
            }
        }
        
        /* Mobile About Section - 2x2 Layout */
        @media (max-width: 768px) {
            /* Stats Grid Mobile */
            .stats-grid {
                gap: 0.75rem !important;
            }
            
            .stats-card {
                height: 120px !important;
                padding: 0.75rem !important;
            }
            
            .stats-number {
                font-size: 1.5rem !important;
                line-height: 1.2 !important;
                margin: 0.25rem 0 !important;
            }
            
            .stats-label {
                font-size: 0.8rem !important;
                line-height: 1.3 !important;
                margin: 0 !important;
            }
            
            .stats-icon {
                width: 40px !important;
                height: 40px !important;
                font-size: 1rem !important;
                margin-bottom: 0.5rem !important;
            }
        }
        
        @media (max-width: 576px) {
            /* Stats Grid Small Mobile */
            .stats-grid {
                gap: 0.5rem !important;
            }
            
            .stats-card {
                height: 100px !important;
                padding: 0.5rem !important;
            }
            
            .stats-number {
                font-size: 1.25rem !important;
                line-height: 1.1 !important;
                margin: 0.2rem 0 !important;
            }
            
            .stats-label {
                font-size: 0.7rem !important;
                line-height: 1.2 !important;
                margin: 0 !important;
            }
            
            .stats-icon {
                width: 35px !important;
                height: 35px !important;
                font-size: 0.9rem !important;
                margin-bottom: 0.25rem !important;
            }
        }
        
        @media (max-width: 480px) {
            .stats-card {
                padding: 0.5rem !important;
                height: 90px !important;
            }
            
            .stats-number {
                font-size: 1.1rem !important;
                margin: 0.15rem 0 !important;
            }
            
            .stats-label {
                font-size: 0.65rem !important;
            }
            
            .stats-icon {
                width: 30px !important;
                height: 30px !important;
                font-size: 0.8rem !important;
                margin-bottom: 0.2rem !important;
            }
            
            /* Stats Grid Extra Small Mobile */
            .stats-grid {
                gap: 0.25rem !important;
            }
        }
        
        /* Mobile Container and Spacing */
        @media (max-width: 768px) {
            .container {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            
            .py-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }
            
            .mb-5 {
                margin-bottom: 3rem !important;
            }
            
            .mt-5 {
                margin-top: 2rem !important;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                padding-left: 0.75rem !important;
                padding-right: 0.75rem !important;
            }
            
            .py-5 {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }
            
            .mb-5 {
                margin-bottom: 2rem !important;
            }
            
            .mt-5 {
                margin-top: 1.5rem !important;
            }
        }
        
        /* Mobile Grid Improvements - 2x2 Layout */
        @media (max-width: 768px) {
            .row {
                margin-left: -0.5rem !important;
                margin-right: -0.5rem !important;
            }
            
            .col, .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, 
            .col-7, .col-8, .col-9, .col-10, .col-11, .col-12 {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }
            
            .g-4 {
                gap: 1rem !important;
            }
            

        }
        

        
        /* Mobile Touch Improvements */
        @media (max-width: 768px) {
            .btn, .nav-link {
                min-height: 44px !important;
                min-width: 44px !important;
            }
            
            .btn:active, .nav-link:active {
                transform: scale(0.95) !important;
            }
            
            body {
                -webkit-overflow-scrolling: touch !important;
            }
        }
        
        /* Ensure proper spacing for fixed navbar */
        main {
            margin-top: 76px !important;
            padding-top: 0 !important;
        }
        
        @media (max-width: 768px) {
            main {
                margin-top: 70px !important;
            }
        }
        
        @media (max-width: 576px) {
            main {
                margin-top: 65px !important;
            }
        }
        
        /* Mobile UMKM Section */
        @media (max-width: 768px) {
            .category-btn {
                padding: 0.75rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            .category-btn h5 {
                font-size: 0.9rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            .category-btn i {
                font-size: 1.5rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            .product-card {
                margin-bottom: 1rem !important;
            }
            
            .product-image {
                height: 150px !important;
            }
            
            .product-card h5 {
                font-size: 1rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            .product-card p {
                font-size: 0.8rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            .product-card .btn {
                font-size: 0.8rem !important;
                padding: 0.5rem 1rem !important;
            }
        }
        
        @media (max-width: 576px) {
            .category-btn {
                padding: 0.5rem !important;
            }
            
            .category-btn h5 {
                font-size: 0.8rem !important;
            }
            
            .category-btn i {
                font-size: 1.25rem !important;
            }
            
            .product-image {
                height: 120px !important;
            }
            
            .product-card h5 {
                font-size: 0.9rem !important;
            }
            
            .product-card p {
                font-size: 0.75rem !important;
            }
        }
        
        /* Mobile Video Section */
        @media (max-width: 768px) {
            .video-section .ratio {
                border-radius: 10px !important;
            }
            
            .video-section iframe {
                border-radius: 10px !important;
            }
            
            .video-card {
                margin-bottom: 1rem !important;
            }
            
            .video-container {
                margin: 0 0.5rem !important;
            }
            
            .video-placeholder h3 {
                font-size: 1.5rem !important;
                margin-bottom: 1rem !important;
            }
            
            .video-placeholder p {
                font-size: 0.95rem !important;
                margin-bottom: 1.5rem !important;
            }
            
            .video-placeholder .btn {
                font-size: 0.85rem !important;
                padding: 0.75rem 1rem !important;
            }
            
            .d-flex.gap-3 {
                flex-direction: column !important;
                gap: 0.75rem !important;
            }
            
            .video-icon-container {
                width: 100px !important;
                height: 100px !important;
            }
            
            .video-placeholder i {
                font-size: 3rem !important;
            }
            
            /* Video Thumbnail Mobile */
            .video-thumbnail {
                height: 300px !important;
            }
            
            .play-icon-container {
                width: 100px !important;
                height: 100px !important;
            }
            
            .play-icon-container i {
                font-size: 2.5rem !important;
            }
            
            .video-info {
                padding: 1.5rem !important;
            }
            
            .video-stats {
                flex-direction: column !important;
                gap: 0.75rem !important;
                align-items: flex-start !important;
            }
            
            .col-lg-4.text-lg-end {
                text-align: center !important;
            }
        }
        
        @media (max-width: 576px) {
            .video-container {
                margin: 0 0.25rem !important;
            }
            
            .video-placeholder h3 {
                font-size: 1.25rem !important;
                margin-bottom: 0.75rem !important;
            }
            
            .video-placeholder p {
                font-size: 0.9rem !important;
                margin-bottom: 1.25rem !important;
            }
            
            .video-placeholder .btn {
                font-size: 0.8rem !important;
                padding: 0.5rem 0.75rem !important;
            }
            
            .video-icon-container {
                width: 80px !important;
                height: 80px !important;
            }
            
            .video-placeholder i {
                font-size: 2.5rem !important;
            }
            
            /* Video Thumbnail Small Mobile */
            .video-thumbnail {
                height: 250px !important;
            }
            
            .play-icon-container {
                width: 80px !important;
                height: 80px !important;
            }
            
            .play-icon-container i {
                font-size: 2rem !important;
            }
            
            .video-info {
                padding: 1rem !important;
            }
            
            .video-info h3 {
                font-size: 1.1rem !important;
            }
            
            .video-info p {
                font-size: 0.85rem !important;
            }
            
            .video-stats {
                gap: 0.5rem !important;
                font-size: 0.8rem !important;
            }
        }
        
        /* Mobile Performance Optimizations */
        @media (max-width: 768px) {
            /* Reduce animations for better performance */
            .animate__animated {
                animation-duration: 0.6s !important;
            }
            
            /* Optimize shadows */
            .shadow-lg {
                box-shadow: 0 5px 15px rgba(0,0,0,0.1) !important;
            }
            
            /* Reduce complex effects */
            .hover-lift:hover {
                transform: translateY(-3px) !important;
            }
            
            /* Improve text readability */
            .text-muted {
                color: #6c757d !important;
            }
            
            /* Better button spacing */
            .btn + .btn {
                margin-left: 0 !important;
                margin-top: 0.5rem !important;
            }
            
            /* Optimize images */
            img {
                max-width: 100% !important;
                height: auto !important;
            }
            
            /* Stats cards improvements */
            .stats-card {
                box-shadow: 0 3px 10px rgba(0,0,0,0.08) !important;
                transition: all 0.3s ease !important;
            }
            
            .stats-card:hover {
                transform: translateY(-2px) !important;
                box-shadow: 0 5px 15px rgba(0,0,0,0.12) !important;
            }
            
            /* Better alignment for stats */
            .stats-card .stats-icon {
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                margin: 0 auto !important;
            }
            
            .stats-card .stats-number {
                display: block !important;
                text-align: center !important;
            }
            
            .stats-card .stats-label {
                display: block !important;
                text-align: center !important;
                word-wrap: break-word !important;
            }
        }
        
        /* Extra Small Mobile Optimizations */
        @media (max-width: 480px) {
            .hero-section {
                padding: 1.5rem 0 1rem 0 !important;
                min-height: 45vh !important;
            }
            
            .video-placeholder h3 {
                font-size: 1.1rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            .video-placeholder p {
                font-size: 0.8rem !important;
                margin-bottom: 1rem !important;
            }
            
            .video-icon-container {
                width: 70px !important;
                height: 70px !important;
                margin-bottom: 1rem !important;
            }
            
            .video-placeholder i {
                font-size: 2rem !important;
            }
            
            .video-placeholder .btn {
                font-size: 0.75rem !important;
                padding: 0.5rem 0.75rem !important;
            }
            
            .video-placeholder {
                padding: 1.5rem !important;
            }
            
            /* Logo section extra small mobile */
            .logo-container {
                width: 70px !important;
                height: 70px !important;
            }
            
            .logo-fallback {
                font-size: 1.75rem !important;
            }
            
            .logo-card {
                padding: 1rem !important;
            }
            
            .logo-card h4 {
                font-size: 0.9rem !important;
            }
            
            .logo-card p {
                font-size: 0.75rem !important;
            }
            
            .hero-section h1 {
                font-size: 1.5rem !important;
            }
            
            .hero-section .lead {
                font-size: 0.85rem !important;
            }
            
            .btn-lg {
                padding: 0.5rem 0.75rem !important;
                font-size: 0.8rem !important;
            }
            
            .feature-card {
                padding: 0.75rem !important;
            }
            
            .feature-card h4 {
                font-size: 0.9rem !important;
            }
            
            .feature-card p {
                font-size: 0.8rem !important;
            }
            
            .stats-card {
                padding: 0.5rem !important;
            }
            
            .stats-number {
                font-size: 1rem !important;
            }
            
            .stats-label {
                font-size: 0.65rem !important;
            }
            
            .container {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }
            
            /* About section improvements for extra small screens */
            .col-lg-6.col-md-12 {
                margin-bottom: 1rem !important;
            }
            
            .pe-lg-5 {
                padding-right: 0 !important;
            }
            
            .display-4 {
                font-size: 1.5rem !important;
                line-height: 1.2 !important;
            }
            
            .lead {
                font-size: 0.9rem !important;
            }
            
            .text-muted {
                font-size: 0.85rem !important;
            }
        }
        
        /* Landscape Mobile Optimizations */
        @media (max-width: 768px) and (orientation: landscape) {
            .hero-section {
                min-height: 40vh !important;
                padding: 1rem 0 !important;
            }
            
            .hero-section h1 {
                font-size: 1.5rem !important;
                margin-bottom: 1rem !important;
            }
            
            .hero-section .lead {
                font-size: 0.9rem !important;
                margin-bottom: 1rem !important;
            }
            
            .hero-stats {
                margin-top: 1rem !important;
            }
            
            .py-5 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }
            
            /* Stats Grid Landscape */
            .stats-grid {
                gap: 0.5rem !important;
            }
            
            .stats-card {
                height: 100px !important;
                padding: 0.5rem !important;
            }
            
            .stats-number {
                font-size: 1.25rem !important;
                margin: 0.2rem 0 !important;
            }
            
            .stats-label {
                font-size: 0.7rem !important;
                margin: 0 !important;
            }
            
            .stats-icon {
                width: 35px !important;
                height: 35px !important;
                font-size: 0.9rem !important;
                margin-bottom: 0.25rem !important;
            }
        }
        
        /* Stats Grid Layout */
        .stats-grid {
            display: grid !important;
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 1rem !important;
            width: 100% !important;
            max-width: 100% !important;
        }
        
        .stats-item {
            width: 100% !important;
            min-width: 0 !important;
        }
        
        .stats-item .stats-card {
            width: 100% !important;
            height: 100% !important;
            min-height: 120px !important;
        }
        
        /* Stats Cards Base Styling - 2x2 Layout */
        .stats-card {
            background: var(--white) !important;
            border-radius: 15px !important;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08) !important;
            transition: all 0.3s ease !important;
            border: none !important;
            overflow: hidden !important;
            position: relative !important;
            height: 140px !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items: center !important;
            padding: 1rem !important;
        }
        
        .stats-card::before {
            content: '' !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            height: 3px !important;
            background: linear-gradient(90deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3), 
                var(--gradient-blue-4)) !important;
        }
        
        .stats-card:hover {
            transform: translateY(-5px) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12) !important;
        }
        
        .stats-icon {
            width: 50px !important;
            height: 50px !important;
            background: rgba(59, 130, 246, 0.1) !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            margin: 0 auto 0.5rem auto !important;
            font-size: 1.25rem !important;
            transition: all 0.3s ease !important;
        }
        
        .stats-card:hover .stats-icon {
            transform: scale(1.1) !important;
            background: rgba(59, 130, 246, 0.2) !important;
        }
        
        .stats-number {
            font-weight: 700 !important;
            margin: 0.25rem 0 !important;
            line-height: 1.2 !important;
            font-size: 1.75rem !important;
        }
        
        .stats-label {
            font-weight: 500 !important;
            opacity: 0.8 !important;
            line-height: 1.3 !important;
            font-size: 0.85rem !important;
            margin: 0 !important;
            word-wrap: break-word !important;
            overflow-wrap: break-word !important;
        }
        

        
        /* Desktop specific adjustments */
        @media (min-width: 769px) {
            .stats-grid {
                gap: 1.5rem !important;
            }
            
            .stats-card {
                height: 160px !important;
                padding: 1.5rem !important;
            }
            
            .stats-number {
                font-size: 2rem !important;
            }
            
            .stats-label {
                font-size: 0.9rem !important;
            }
            
            .stats-icon {
                width: 60px !important;
                height: 60px !important;
                font-size: 1.5rem !important;
            }
        }
        
        /* Tablet specific adjustments */
        @media (min-width: 577px) and (max-width: 768px) {
            .stats-grid {
                gap: 1rem !important;
            }
            
            .stats-card {
                height: 140px !important;
                padding: 1rem !important;
            }
            
            .stats-number {
                font-size: 1.75rem !important;
            }
            
            .stats-label {
                font-size: 0.85rem !important;
            }
            
            .stats-icon {
                width: 50px !important;
                height: 50px !important;
                font-size: 1.25rem !important;
            }
        }
    </style>

    <!-- Features Section -->
    <section id="features" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-primary text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-star me-2"></i>
                        Keunggulan
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    Keunggulan <span class="text-primary">Dusun Ngelampengan</span>
                </h2>
                <p class="lead text-muted fs-5">
                    Kami bangga dengan berbagai keunggulan yang dimiliki dusun kami di Kapanewon Dlingo
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card h-100 p-5 text-center hover-lift">
                        <div class="feature-icon mb-4">
                            <i class="fas fa-tree"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-3">Alam yang Asri</h4>
                        <p class="text-muted">
                            Dikelilingi oleh pemandangan alam yang indah dengan udara segar dan lingkungan yang nyaman untuk tinggal.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card h-100 p-5 text-center hover-lift">
                        <div class="feature-icon mb-4">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-3">Masyarakat Solid</h4>
                        <p class="text-muted">
                            Semangat gotong royong yang kuat dan kebersamaan dalam setiap kegiatan pembangunan dusun.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card h-100 p-5 text-center hover-lift">
                        <div class="feature-icon mb-4">
                            <i class="fas fa-store"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-3">UMKM Berkembang</h4>
                        <p class="text-muted">
                            Berbagai UMKM yang berkembang pesat dengan produk berkualitas dan inovasi yang terus meningkat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="pe-lg-5">
                        <div class="section-badge mb-3">
                            <span class="badge bg-success text-white px-4 py-2 fs-6 shadow-sm">
                                <i class="fas fa-info-circle me-2"></i>
                                Tentang Kami
                            </span>
                        </div>
                        <h2 class="display-4 fw-bold text-dark mb-4">
                            Tentang <span class="text-primary">Dusun Ngelampengan</span>
                        </h2>
                        <p class="lead text-muted mb-4 fs-5">
                            Dusun Ngelampengan memiliki sejarah yang berkaitan erat dengan pembentukan wilayah Kapanewon Dlingo.
                        </p>
                        <p class="text-muted mb-4">
                            Saat ini, dusun kami terus berkembang dengan semangat gotong royong dan inovasi dalam mengelola 
                            sumber daya alam secara berkelanjutan, sambil tetap mempertahankan nilai-nilai budaya dan 
                            kearifan lokal yang telah diwariskan dari generasi ke generasi.
                        </p>
                        <a href="{{ route('about') }}" class="btn btn-primary btn-lg px-4 py-3 hover-lift">
                            <i class="fas fa-arrow-right me-2"></i>
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12" data-aos="fade-left">
                    <div class="stats-grid">
                        <!-- Row 1: Tahun Sejarah & Penduduk -->
                        <div class="stats-item" data-aos="zoom-in" data-aos-delay="100">
                            <div class="stats-card text-center hover-lift">
                                <div class="stats-icon">
                                    <i class="fas fa-calendar text-primary"></i>
                                </div>
                                <div class="stats-number fw-bold text-primary counter" data-target="100">0</div>
                                <div class="stats-label text-muted">Tahun Sejarah</div>
                            </div>
                        </div>
                        <div class="stats-item" data-aos="zoom-in" data-aos-delay="200">
                            <div class="stats-card text-center hover-lift">
                                <div class="stats-icon">
                                    <i class="fas fa-users text-success"></i>
                                </div>
                                <div class="stats-number fw-bold text-success counter" data-target="500">0</div>
                                <div class="stats-label text-muted">Penduduk</div>
                            </div>
                        </div>
                        <!-- Row 2: UMKM Aktif & Hektar Lahan -->
                        <div class="stats-item" data-aos="zoom-in" data-aos-delay="300">
                            <div class="stats-card text-center hover-lift">
                                <div class="stats-icon">
                                    <i class="fas fa-store text-warning"></i>
                                </div>
                                <div class="stats-number fw-bold text-warning counter" data-target="50">0</div>
                                <div class="stats-label text-muted">UMKM Aktif</div>
                            </div>
                        </div>
                        <div class="stats-item" data-aos="zoom-in" data-aos-delay="400">
                            <div class="stats-card text-center hover-lift">
                                <div class="stats-icon">
                                    <i class="fas fa-map text-info"></i>
                                </div>
                                <div class="stats-number fw-bold text-info counter" data-target="1000">0</div>
                                <div class="stats-label text-muted">Hektar Lahan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UMKM Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-warning text-dark px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-store me-2"></i>
                        UMKM Lokal
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    UMKM <span class="text-primary">Dusun Ngelampengan</span>
                </h2>
                <p class="lead text-muted fs-5">
                    Berbagai produk berkualitas dari UMKM lokal Dusun Ngelampengan, Kapanewon Dlingo
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card h-100 p-4 text-center hover-lift">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-hammer"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Kerajinan Kayu</h5>
                        <p class="text-muted small">
                            Furniture dan kerajinan kayu berkualitas tinggi dengan desain tradisional dan modern
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card h-100 p-4 text-center hover-lift">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Pertanian Organik</h5>
                        <p class="text-muted small">
                            Hasil pertanian organik berkualitas tinggi dengan metode tradisional yang ramah lingkungan
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card h-100 p-4 text-center hover-lift">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Kerajinan Tangan</h5>
                        <p class="text-muted small">
                            Berbagai kerajinan tangan dengan nilai seni dan budaya yang tinggi
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card h-100 p-4 text-center hover-lift">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Makanan Tradisional</h5>
                        <p class="text-muted small">
                            Makanan tradisional dengan cita rasa autentik dan bahan baku lokal berkualitas
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route('umkm') }}" class="btn btn-primary btn-lg px-5 py-3 hover-lift">
                    <i class="fas fa-store me-2"></i>
                    Lihat Semua UMKM
                </a>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-success text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-video me-2"></i>
                        Video
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    Video Profil Dusun Ngelampengan
                </h2>
                <p class="lead text-muted fs-5">
                    Tonton video profil lengkap Dusun Ngelampengan yang menampilkan keindahan alam, budaya, dan UMKM yang berkembang di wilayah Kapanewon Dlingo, Daerah Istimewa Yogyakarta.
                </p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="200">
                    <!-- Video Thumbnail Container -->
                    <div class="video-thumbnail-container position-relative" style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.15); background: white;">
                        <!-- Video Thumbnail Section -->
                        <div class="video-thumbnail" style="position: relative; height: 400px; display: flex; align-items: center; justify-content: center; overflow: hidden; background-size: cover; background-position: center; background-repeat: no-repeat; @if($videoContent && $videoContent->image) background-image: url('{{ asset('storage/' . $videoContent->image) }}'); @else background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); @endif">
                            <!-- Dark overlay for better text readability when using image -->
                            @if($videoContent && $videoContent->image)
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); z-index: 1;"></div>
                            @endif
                            
                            <!-- Decorative Elements -->
                            <div class="thumbnail-pattern" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; z-index: 1;">
                                <div style="position: absolute; top: 20px; left: 20px; width: 60px; height: 60px; background: rgba(255,255,255,0.3); border-radius: 50%;"></div>
                                <div style="position: absolute; top: 100px; right: 40px; width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
                                <div style="position: absolute; bottom: 80px; left: 60px; width: 80px; height: 80px; background: rgba(255,255,255,0.25); border-radius: 50%;"></div>
                                <div style="position: absolute; bottom: 40px; right: 80px; width: 50px; height: 50px; background: rgba(255,255,255,0.15); border-radius: 50%;"></div>
                            </div>
                            
                            <!-- Play Button -->
                            <div class="video-play-button" style="position: relative; z-index: 2;">
                                <div class="play-icon-container" style="width: 120px; height: 120px; background: rgba(255,255,255,0.95); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(0,0,0,0.3); cursor: pointer; transition: all 0.3s ease;" onclick="openVideo()">
                                    <i class="fas fa-play fa-3x text-primary" style="margin-left: 8px;"></i>
                                </div>
                            </div>
                            
                            <!-- Video Duration -->
                            <div class="video-duration" style="position: absolute; top: 20px; right: 20px; background: rgba(0,0,0,0.7); color: white; padding: 8px 12px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; z-index: 2;">
                                05:32
                            </div>
                            
                            <!-- YouTube Badge -->
                            <div class="video-source" style="position: absolute; top: 20px; left: 20px; background: rgba(255,255,255,0.9); color: #333; padding: 8px 12px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; display: flex; align-items: center; gap: 8px; z-index: 2;">
                                <i class="fab fa-youtube text-danger"></i>
                                YouTube
                            </div>
                            
                            <!-- Image Source Badge (if image exists) -->
                            @if($videoContent && $videoContent->image)
                                <div class="image-source" style="position: absolute; bottom: 20px; left: 20px; background: rgba(0,0,0,0.7); color: white; padding: 6px 10px; border-radius: 15px; font-size: 0.8rem; font-weight: 500; z-index: 2;">
                                    <i class="fas fa-image me-1"></i>Gambar Admin
                                </div>
                            @endif
                        </div>
                        
                        <!-- Video Info Section -->
                        <div class="video-info" style="padding: 2rem; background: white;">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <h3 class="fw-bold text-dark mb-2 fs-4">Profil Dusun Ngelampengan - Keindahan Alam & UMKM</h3>
                                    <p class="text-muted mb-2">
                                        <i class="fab fa-youtube text-danger me-2"></i>
                                        <span class="fw-semibold">Dusun Ngelampengan Official</span>
                                    </p>
                                    <div class="video-stats d-flex align-items-center gap-4 text-muted">
                                        <span><i class="fas fa-eye me-1"></i>2.5K views</span>
                                        <span><i class="fas fa-calendar me-1"></i>2 weeks ago</span>
                                        <span><i class="fas fa-thumbs-up me-1"></i>128 likes</span>
                                    </div>
                                    @if($videoContent && $videoContent->video_url)
                                        <div class="mt-3">
                                            <small class="text-muted">
                                                <i class="fas fa-info-circle me-1"></i>
                                                Video URL: {{ $videoContent->video_url }}
                                            </small>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-4 text-lg-end">
                                    <button class="btn btn-primary btn-lg me-2 mb-2" onclick="openVideo()">
                                        <i class="fas fa-play me-2"></i>Tonton Video
                                    </button>
                                    @if($videoContent && $videoContent->video_url)
                                        
                                    @else
                                        <a href="https://www.youtube.com" target="_blank" class="btn btn-outline-primary btn-lg mb-2">
                                            <i class="fab fa-youtube me-2"></i>Lihat di YouTube
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Logo Section -->
    <section class="py-5 bg-white logo-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-info text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-shield-alt me-2"></i>
                        Logo Resmi
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    Logo <span class="text-primary">Resmi</span>
                </h2>
                <p class="lead text-muted fs-5">
                    Logo Kabupaten Bantul, Kelompok KKN UMBY 2025, dan Logo KKN
                </p>
            </div>
            
            <div class="row justify-content-center align-items-stretch">
                <!-- Logo 1: Kabupaten Bantul -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-right">
                    <div class="logo-card text-center p-4 h-100 hover-lift">
                        <div class="logo-container mb-3">
                            <img src="{{ asset('images/logos/logo_bantul.png') }}" alt="Logo Kabupaten Bantul" class="logo-img" onerror="this.style.display='none'">
                            <div class="logo-fallback" style="display: none;">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Kabupaten Bantul</h4>
                        <p class="text-muted mb-0">Daerah Istimewa Yogyakarta</p>
                    </div>
                </div>
                
                <!-- Logo 2: KKN Kelompok -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="logo-card text-center p-4 h-100 hover-lift">
                        <div class="logo-container mb-3">
                            <img src="{{ asset('images/logos/logo_kelompok.png') }}" alt="Logo Kelompok KKN" class="logo-img" onerror="this.style.display='none'">
                            <div class="logo-fallback" style="display: none;">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">KKN Kelompok 19</h4>
                        <p class="text-muted mb-0">UMBY 2025</p>
                    </div>
                </div>
                
                <!-- Logo 3: Logo KKN -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-left">
                    <div class="logo-card text-center p-4 h-100 hover-lift">
                        <div class="logo-container mb-3">
                            <img src="{{ asset('images/logos/logo_kkn.png') }}" alt="Logo KKN" class="logo-img" onerror="this.style.display='none'">
                            <div class="logo-fallback" style="display: none;">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">KKNPPM</h4>
                        <p class="text-muted mb-0">KKN-PPM UMBY 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  

    <!-- Additional CSS for animations and improvements -->
    <style>
        /* Animate.css for smooth animations */
        @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
        
        /* AOS (Animate On Scroll) */
        @import url('https://unpkg.com/aos@2.3.1/dist/aos.css');
        
        /* Custom animations and improvements */
        .gradient-text {
            background: linear-gradient(45deg, #ffffff, #e3f2fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(255,255,255,0.05) 0%, transparent 50%);
            animation: particleFloat 20s ease-in-out infinite;
        }
        
        @keyframes particleFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--bs-primary), #0056b3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.1);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .stats-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .stats-icon {
            font-size: 1.5rem;
        }
        
        /* Video Section Styling */
        .video-container {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .video-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }
        
        .video-container iframe {
            border-radius: 15px;
            transition: all 0.3s ease;
            background: #000;
        }
        
        .video-fallback {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px dashed #dee2e6;
            transition: all 0.3s ease;
        }
        
        .video-fallback:hover {
            background: linear-gradient(135deg, #e9ecef 0%, #dee2e6 100%);
            border-color: #adb5bd;
            transform: scale(1.02);
        }
        
        .video-placeholder {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            transition: all 0.3s ease;
            animation: placeholderPulse 3s ease-in-out infinite;
            position: relative;
            overflow: hidden;
        }
        
        .video-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
            animation: shimmer 2s infinite;
        }
        
        .video-placeholder:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.4);
        }
        
        .video-icon-container {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }
        
        .video-placeholder:hover .video-icon-container {
            transform: scale(1.1);
            background: rgba(255,255,255,0.3);
            border-color: rgba(255,255,255,0.5);
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        @keyframes placeholderPulse {
            0%, 100% { 
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                border-color: #dee2e6;
            }
            50% { 
                box-shadow: 0 15px 40px rgba(0,0,0,0.15);
                border-color: #adb5bd;
            }
        }
        
        /* Video Loading Animation */
        .video-fallback i {
            animation: videoBounce 2s ease-in-out infinite;
        }
        
        @keyframes videoBounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* Video Error Handling */
        .video-container iframe[style*="display: none"] + .video-fallback {
            display: flex !important;
        }
        
        /* Video Thumbnail Styling */
        .video-thumbnail-container {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .video-thumbnail-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }
        
        .video-thumbnail {
            position: relative;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: all 0.3s ease;
        }
        
        .video-thumbnail:hover {
            transform: scale(1.02);
        }
        
        /* Image overlay for better text readability */
        .video-thumbnail .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
            z-index: 1;
            transition: all 0.3s ease;
        }
        
        .video-thumbnail:hover .image-overlay {
            background: rgba(0,0,0,0.3);
        }
        
        /* Image source badge */
        .image-source {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 6px 10px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
            z-index: 2;
            transition: all 0.3s ease;
        }
        
        .image-source:hover {
            background: rgba(0,0,0,0.8);
            transform: scale(1.05);
        }
        
        .thumbnail-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            transition: all 0.3s ease;
        }
        
        .video-thumbnail:hover .thumbnail-pattern {
            opacity: 0.15;
        }
        
        .play-icon-container {
            width: 120px;
            height: 120px;
            background: rgba(255,255,255,0.95);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }
        
        .play-icon-container:hover {
            transform: scale(1.1);
            background: rgba(255,255,255,1);
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }
        
        .play-icon-container:active {
            transform: scale(0.95);
        }
        
        .video-duration {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 8px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        
        .video-duration:hover {
            background: rgba(0,0,0,0.8);
            transform: scale(1.05);
        }
        
        .video-source {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255,255,255,0.9);
            color: #333;
            padding: 8px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        
        .video-source:hover {
            background: rgba(255,255,255,1);
            transform: scale(1.05);
        }
        
        .video-info {
            padding: 2rem;
            background: white;
            transition: all 0.3s ease;
        }
        
        .video-stats {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .video-stats span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .video-stats span:hover {
            color: var(--bs-primary);
            transform: translateY(-2px);
        }
        

        
                 /* Logo Section Styling */
         .logo-card {
             background: white;
             border-radius: 15px;
             box-shadow: 0 5px 20px rgba(0,0,0,0.1);
             transition: all 0.3s ease;
             border: 1px solid rgba(0,0,0,0.05);
             height: 100%;
             display: flex;
             flex-direction: column;
             justify-content: space-between;
         }
         
         .logo-container {
             width: 120px;
             height: 120px;
             margin: 0 auto;
             display: flex;
             align-items: center;
             justify-content: center;
             border-radius: 15px;
             overflow: hidden;
             background: linear-gradient(135deg, #f8f9fa, #e9ecef);
             flex-shrink: 0;
         }
         
         .logo-img {
             width: 100%;
             height: 100%;
             object-fit: contain;
             padding: 10px;
             transition: all 0.3s ease;
         }
         
         .logo-fallback {
             width: 100%;
             height: 100%;
             background: linear-gradient(135deg, var(--bs-primary), #0056b3);
             display: flex;
             align-items: center;
             justify-content: center;
             color: white;
             font-size: 3rem;
         }
         
         .logo-card h4 {
             margin-top: auto;
             margin-bottom: 0.5rem;
         }
         
         .logo-card p {
             margin-bottom: 0;
         }
         
         /* Logo Section Responsive */
         @media (max-width: 991px) {
             .logo-section .row {
                 justify-content: center;
             }
             
             .col-lg-4.col-md-6 {
                 max-width: 350px;
                 margin: 0 auto 1.5rem auto;
             }
         }
         
         @media (max-width: 768px) {
             .logo-container {
                 width: 100px;
                 height: 100px;
             }
             
             .logo-fallback {
                 font-size: 2.5rem;
             }
             
             .logo-card h4 {
                 font-size: 1.1rem;
             }
             
             .logo-card p {
                 font-size: 0.9rem;
             }
             
             .col-lg-4.col-md-6 {
                 max-width: 300px;
                 margin: 0 auto 1rem auto;
             }
         }
         
         @media (max-width: 576px) {
             .logo-container {
                 width: 80px;
                 height: 80px;
             }
             
             .logo-fallback {
                 font-size: 2rem;
             }
             
             .logo-card {
                 padding: 1.5rem !important;
             }
             
             .logo-card h4 {
                 font-size: 1rem;
             }
             
             .logo-card p {
                 font-size: 0.8rem;
             }
             
             .col-lg-4.col-md-6 {
                 max-width: 280px;
                 margin: 0 auto 0.75rem auto;
             }
         }
         
         @media (max-width: 480px) {
             .logo-container {
                 width: 70px;
                 height: 70px;
             }
             
             .logo-fallback {
                 font-size: 1.75rem;
             }
             
             .logo-card {
                 padding: 1rem !important;
             }
             
             .logo-card h4 {
                 font-size: 0.9rem;
             }
             
             .logo-card p {
                 font-size: 0.75rem;
             }
             
             .col-lg-4.col-md-6 {
                 max-width: 250px;
                 margin: 0 auto 0.5rem auto;
             }
         }
    </style>


    
    <!-- JavaScript for animations and interactions -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
        
        // Counter animation
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 16);
        }
        
        // Intersection Observer for counter animation
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter);
                    counterObserver.unobserve(counter);
                }
            });
        }, observerOptions);
        
        // Observe all counter elements
        document.querySelectorAll('.counter').forEach(counter => {
            counterObserver.observe(counter);
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Performance optimization: Debounce scroll events
        let scrollTimeout;
        window.addEventListener('scroll', () => {
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }
            scrollTimeout = setTimeout(() => {
                // Handle scroll-based animations here if needed
            }, 16);
        });
        
        // Mobile optimizations
        function isMobile() {
            return window.innerWidth <= 768;
        }
        
        // Adjust AOS settings for mobile
        if (isMobile()) {
            AOS.init({
                duration: 600,
                easing: 'ease-out',
                once: true,
                offset: 50,
                disable: 'phone'
            });
        }
        
        // Handle mobile touch events
        if ('ontouchstart' in window) {
            document.body.classList.add('touch-device');
            
            // Optimize touch interactions
            document.querySelectorAll('.btn, .nav-link, .feature-card').forEach(element => {
                element.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.98)';
                });
                
                element.addEventListener('touchend', function() {
                    this.style.transform = '';
                });
            });
        }
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (isMobile()) {
                // Mobile-specific adjustments
                document.querySelectorAll('.animate__animated').forEach(element => {
                    element.style.animationDuration = '0.6s';
                });
            }
        });
        
        // Ensure navbar consistency
        document.addEventListener('DOMContentLoaded', function() {
            // Ensure navbar is properly styled
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                navbar.style.background = 'var(--white)';
                navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
                navbar.style.zIndex = '1030';
            }
            
            // Ensure active nav link is properly highlighted
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href && (href === currentPath || (currentPath === '/' && href.includes('beranda')))) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
            
            // Mobile navigation improvements
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            
            if (navbarToggler && navbarCollapse) {
                // Close mobile menu when clicking on a link
                const navLinks = navbarCollapse.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth < 992) {
                            navbarCollapse.classList.remove('show');
                        }
                    });
                });
                
                // Close mobile menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!navbarToggler.contains(e.target) && !navbarCollapse.contains(e.target)) {
                        navbarCollapse.classList.remove('show');
                    }
                });
            }
            
            // Force correct order for stats cards
            const statsContainer = document.querySelector('.col-lg-6 .row');
            if (statsContainer) {
                const statsCards = statsContainer.querySelectorAll('.col-6');
                if (statsCards.length === 4) {
                    // Ensure correct order: Tahun Sejarah, Penduduk, UMKM Aktif, Hektar Lahan
                    const expectedOrder = [
                        { icon: 'fa-calendar', label: 'Tahun Sejarah', color: 'text-primary', target: 100 },
                        { icon: 'fa-users', label: 'Penduduk', color: 'text-success', target: 500 },
                        { icon: 'fa-store', label: 'UMKM Aktif', color: 'text-warning', target: 50 },
                        { icon: 'fa-map', label: 'Hektar Lahan', color: 'text-info', target: 1000 }
                    ];
                    
                    statsCards.forEach((card, index) => {
                        const expected = expectedOrder[index];
                        const icon = card.querySelector('.stats-icon i');
                        const label = card.querySelector('.stats-label');
                        const number = card.querySelector('.stats-number');
                        
                        if (icon && label && number) {
                            // Update icon class
                            icon.className = `fas ${expected.icon} ${expected.color}`;
                            
                            // Update label
                            label.textContent = expected.label;
                            
                            // Update number target
                            number.setAttribute('data-target', expected.target);
                            number.textContent = '0';
                        }
                    });
                }
            }
        });
        

        
        // Handle logo fallback
        document.addEventListener('DOMContentLoaded', function() {
            const logoImages = document.querySelectorAll('.logo-img');
            
            logoImages.forEach(function(img) {
                img.addEventListener('error', function() {
                    this.style.display = 'none';
                    const fallback = this.parentElement.querySelector('.logo-fallback');
                    if (fallback) {
                        fallback.style.display = 'flex';
                    }
                });
                
                if (img.complete && img.naturalHeight === 0) {
                    img.style.display = 'none';
                    const fallback = img.parentElement.querySelector('.logo-fallback');
                    if (fallback) {
                        fallback.style.display = 'flex';
                    }
                }
            });
            
            // Handle video iframe fallback
            const videoIframes = document.querySelectorAll('.video-container iframe');
            videoIframes.forEach(function(iframe) {
                // Show fallback initially
                const fallback = iframe.nextElementSibling;
                if (fallback && fallback.classList.contains('video-fallback')) {
                    fallback.style.display = 'flex';
                }
                
                // Hide fallback when iframe loads successfully
                iframe.addEventListener('load', function() {
                    this.style.display = 'block';
                    if (fallback) {
                        fallback.style.display = 'none';
                    }
                });
                
                iframe.addEventListener('error', function() {
                    this.style.display = 'none';
                    if (fallback) {
                        fallback.style.display = 'flex';
                    }
                });
                
                // Check if iframe loaded successfully after 8 seconds
                setTimeout(function() {
                    if (iframe.contentWindow && iframe.contentWindow.location.href === 'about:blank') {
                        iframe.style.display = 'none';
                        if (fallback) {
                            fallback.style.display = 'flex';
                        }
                    }
                }, 8000);
                
                // Additional check for YouTube embed issues
                setTimeout(function() {
                    try {
                        if (iframe.src && iframe.src.includes('youtube.com') && iframe.contentWindow) {
                            // Try to access iframe content
                            iframe.contentWindow.postMessage('ping', '*');
                        }
                    } catch (e) {
                        // If there's an error, show fallback
                        iframe.style.display = 'none';
                        if (fallback) {
                            fallback.style.display = 'flex';
                        }
                    }
                }, 3000);
            });
            

        });
        
        // Force page refresh to ensure correct order
        if (window.location.pathname === '/beranda' || window.location.pathname === '/') {
            // Add a small delay to ensure DOM is ready
            setTimeout(() => {
                const statsContainer = document.querySelector('.col-lg-6 .row');
                if (statsContainer) {
                    console.log('Stats container found, ensuring correct order...');
                }
            }, 100);
        }
        
        // Video Player Control Functions
        function openVideo() {
            // Get video URL from database
            const videoUrl = '{{ $videoContent->video_url ?? "" }}';
            
            if (videoUrl && videoUrl.trim() !== '') {
                // Open video in new tab
                window.open(videoUrl, '_blank');
            } else {
                // Fallback: open YouTube homepage
                window.open('https://www.youtube.com', '_blank');
            }
        }
        
        function showVideoPlayer() {
            const videoPlayer = document.getElementById('videoPlayer');
            const youtubeIframe = document.getElementById('youtubeIframe');
            const videoLoading = document.getElementById('videoLoading');
            
            if (videoPlayer && youtubeIframe) {
                // Get video URL from database
                const videoUrl = '{{ $videoContent->video_url ?? "" }}';
                
                console.log('Video URL:', videoUrl); // Debug log
                
                if (videoUrl && videoUrl.trim() !== '') {
                    try {
                        // Convert to embed URL
                        let embedUrl = videoUrl;
                        
                        if (videoUrl.includes('watch?v=')) {
                            embedUrl = videoUrl.replace('watch?v=', 'embed/');
                        } else if (videoUrl.includes('youtu.be/')) {
                            embedUrl = videoUrl.replace('youtu.be/', 'www.youtube.com/embed/');
                        } else if (videoUrl.includes('youtube.com/embed/')) {
                            embedUrl = videoUrl;
                        } else {
                            // If URL format is unknown, try to extract video ID
                            const videoIdMatch = videoUrl.match(/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([a-zA-Z0-9_-]+)/);
                            if (videoIdMatch) {
                                embedUrl = 'https://www.youtube.com/embed/' + videoIdMatch[1];
                            } else {
                                throw new Error('Invalid YouTube URL format');
                            }
                        }
                        
                        console.log('Embed URL:', embedUrl); // Debug log
                        
                        // Show video player first
                        videoPlayer.style.display = 'block';
                        videoPlayer.style.opacity = '0';
                        videoPlayer.style.transition = 'opacity 0.3s ease';
                        
                        // Show loading indicator
                        if (videoLoading) {
                            videoLoading.style.display = 'block';
                        }
                        
                        // Set iframe source with parameters
                        const finalUrl = embedUrl + '?rel=0&modestbranding=1&showinfo=0&autoplay=1&enablejsapi=1';
                        youtubeIframe.src = finalUrl;
                        
                        // Fade in video player
                        setTimeout(() => {
                            videoPlayer.style.opacity = '1';
                        }, 10);
                        
                        // Hide loading indicator after video loads
                        youtubeIframe.onload = function() {
                            console.log('Video iframe loaded successfully');
                            if (videoLoading) {
                                videoLoading.style.display = 'none';
                            }
                        };
                        
                        // Handle iframe errors
                        youtubeIframe.onerror = function() {
                            console.log('Video iframe failed to load');
                            hideVideoPlayer();
                            alert('Video tidak dapat dimuat. Silakan buka langsung di YouTube.');
                        };
                        
                    } catch (error) {
                        console.error('Error processing video URL:', error);
                        hideVideoPlayer();
                        alert('URL video tidak valid. Silakan buka langsung di YouTube.');
                    }
                } else {
                    console.log('No video URL available');
                    // Fallback: open YouTube directly
                    window.open('https://www.youtube.com', '_blank');
                }
            } else {
                console.error('Video player elements not found');
                alert('Video player tidak tersedia. Silakan buka langsung di YouTube.');
            }
        }
        
        function hideVideoPlayer() {
            const videoPlayer = document.getElementById('videoPlayer');
            const youtubeIframe = document.getElementById('youtubeIframe');
            const videoLoading = document.getElementById('videoLoading');
            
            if (videoPlayer && youtubeIframe) {
                // Hide video player with smooth transition
                videoPlayer.style.opacity = '0';
                
                setTimeout(() => {
                    videoPlayer.style.display = 'none';
                    // Clear iframe source to stop video
                    youtubeIframe.src = '';
                    
                    // Reset loading indicator
                    if (videoLoading) {
                        videoLoading.style.display = 'block';
                    }
                }, 300);
            }
        }
    </script>
@endsection 