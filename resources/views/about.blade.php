@extends('layouts.app')

@section('title', 'Tentang Kami - Dusun Ngelampengan')

@section('content')
    <!-- Mobile Responsive CSS -->
    <style>
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
        
        /* Mobile History Section */
        @media (max-width: 768px) {
            .bg-light-green {
                background-color: #f8f9fa !important;
            }
            
            .col-lg-6 {
                margin-bottom: 2rem !important;
            }
            
            .pe-lg-5 {
                padding-right: 0 !important;
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
            .display-4 {
                font-size: 1.75rem !important;
            }
            
            .lead {
                font-size: 0.9rem !important;
            }
            
            .section-badge .badge {
                font-size: 0.8rem !important;
                padding: 0.5rem 1rem !important;
            }
            
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
                margin: 0.2rem 0 !important;
            }
            
            .stats-label {
                font-size: 0.7rem !important;
            }
            
            .stats-icon {
                width: 35px !important;
                height: 35px !important;
                font-size: 0.9rem !important;
                margin-bottom: 0.25rem !important;
            }
        }
        
        @media (max-width: 480px) {
            /* Stats Grid Extra Small Mobile */
            .stats-grid {
                gap: 0.25rem !important;
            }
            
            .stats-card {
                height: 90px !important;
                padding: 0.4rem !important;
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
        
        /* Mobile Grid Improvements */
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
            
            /* Stats cards specific improvements */
            .col-6 {
                padding-left: 0.25rem !important;
                padding-right: 0.25rem !important;
            }
        }
        
        @media (max-width: 576px) {
            .col-6 {
                padding-left: 0.125rem !important;
                padding-right: 0.125rem !important;
            }
        }
        
        @media (max-width: 480px) {
            .col-6 {
                padding-left: 0.1rem !important;
                padding-right: 0.1rem !important;
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
        
        /* Stats Grid Layout */
        .stats-grid {
            display: grid !important;
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 1rem !important;
            width: 100% !important;
            max-width: 100% !important;
        }
        
        /* Ensure grid items are responsive */
        .stats-item {
            width: 100% !important;
            min-width: 0 !important;
        }
        
        .stats-item .stats-card {
            width: 100% !important;
            height: 100% !important;
            min-height: 120px !important;
        }
        
        .stats-item {
            width: 100% !important;
        }
        
        /* Stats Cards Base Styling */
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
        
        /* Extra Small Mobile Optimizations */
        @media (max-width: 480px) {
            .hero-section {
                padding: 1.5rem 0 1rem 0 !important;
                min-height: 45vh !important;
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
            
            .display-4 {
                font-size: 1.5rem !important;
                line-height: 1.2 !important;
            }
            
            .lead {
                font-size: 0.9rem !important;
            }
            
            .container {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
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
    </style>
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
                            Desa Unggulan
                        </span>
                    </div>
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInUp">
                        Mari Berkunjung ke <span class="text-white gradient-text">Dusun Ngelampengan</span>
                    </h1>
                    <p class="lead mb-5 fs-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Rasakan kehangatan masyarakat kami dan lihat langsung potensi UMKM yang berkembang pesat di Kapanewon Dlingo
                    </p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#sejarah" class="btn btn-white btn-lg px-5 py-3 text-primary shadow-lg hover-lift">
                            <i class="fas fa-history me-2"></i>
                            Pelajari Sejarah
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

    <!-- History Section -->
    <section id="sejarah" class="py-5 bg-light-green">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="pe-lg-5">
                        <div class="section-badge mb-3">
                            <span class="badge bg-primary text-white px-4 py-2 fs-6 shadow-sm">
                                <i class="fas fa-history me-2"></i>
                                Sejarah Panjang
                            </span>
                        </div>
                        <h2 class="display-4 fw-bold text-dark mb-4">
                            Sejarah <span class="text-primary">Dusun Ngelampengan</span>
                        </h2>
                        <p class="lead text-muted mb-4 fs-5">
                            Dusun Ngelampengan memiliki sejarah yang berkaitan erat dengan pembentukan wilayah Kapanewon Dlingo. 
                            Awalnya, wilayah Dlingo merupakan bagian dari enclave (daerah kantong) Imogiri yang berada 
                            di bawah naungan Kasunanan Surakarta.
                        </p>
                        <p class="text-muted mb-4">
                            Pada tahun 1957, enclave Imogiri ini dimasukkan ke dalam wilayah Daerah Istimewa Yogyakarta, 
                            yang menjadi tonggak sejarah penting dalam perkembangan administratif wilayah ini. 
                            Perubahan status ini membawa dampak signifikan terhadap perkembangan sosial, ekonomi, 
                            dan budaya masyarakat setempat.
                        </p>
                        <p class="text-muted">
                            Saat ini, Dusun Ngelampengan terus berkembang dengan semangat gotong royong dan 
                            inovasi dalam mengelola sumber daya alam secara berkelanjutan, sambil tetap 
                            mempertahankan nilai-nilai budaya dan kearifan lokal yang telah diwariskan 
                            dari generasi ke generasi.
                        </p>
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

    <!-- Vision Mission Section -->
    <section id="visi-misi" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-success text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-bullseye me-2"></i>
                        Arah Pengembangan
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    Visi & Misi
                </h2>
                <p class="lead text-muted fs-5">
                    Arah pengembangan Dusun Ngelampengan ke depannya
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="feature-card h-100 p-5 hover-lift">
                        <div class="text-center mb-4">
                            <div class="feature-icon mb-4">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="fw-bold text-dark">Visi</h3>
                        </div>
                        <p class="lead text-muted text-center">
                            "Menjadi desa yang mandiri, sejahtera, dan berkelanjutan dengan mengoptimalkan 
                            potensi sumber daya alam dan kearifan lokal dalam pengembangan UMKM yang inovatif 
                            di wilayah Kapanewon Dlingo."
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="feature-card h-100 p-5 hover-lift">
                        <div class="text-center mb-4">
                            <div class="feature-icon mb-4">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="fw-bold text-dark">Misi</h3>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                <span class="text-muted">Mengembangkan UMKM berbasis sumber daya lokal</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                <span class="text-muted">Meningkatkan kualitas produk dan daya saing</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                <span class="text-muted">Melestarikan kearifan lokal dan budaya tradisional</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                <span class="text-muted">Mewujudkan pembangunan yang berkelanjutan</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-warning text-dark px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-heart me-2"></i>
                        Budaya & Kearifan
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    Budaya & Kearifan Lokal
                </h2>
                <p class="lead text-muted fs-5">
                                         Nilai-nilai budaya yang menjadi fondasi kehidupan masyarakat Dusun Ngelampengan, Kapanewon Dlingo
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card h-100 p-5 text-center hover-lift">
                        <div class="feature-icon mb-4">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-3">Gotong Royong</h4>
                        <p class="text-muted">
                            Semangat gotong royong yang kuat dalam setiap kegiatan pembangunan dan pengembangan desa.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card h-100 p-5 text-center hover-lift">
                        <div class="feature-icon mb-4">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-3">Harmoni dengan Alam</h4>
                        <p class="text-muted">
                            Menjaga keseimbangan dengan alam dalam setiap aktivitas ekonomi dan sosial.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card h-100 p-5 text-center hover-lift">
                        <div class="feature-icon mb-4">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-3">Pewarisan Ilmu</h4>
                        <p class="text-muted">
                            Melestarikan dan mewariskan keterampilan tradisional kepada generasi muda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Economy Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-info text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-chart-line me-2"></i>
                        Potensi Ekonomi
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    Potensi Ekonomi
                </h2>
                <p class="lead text-muted fs-5">
                    Berbagai sektor ekonomi yang menjadi tulang punggung Dusun Ngelampengan
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card h-100 p-4 text-center hover-lift">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-tree"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Perkayuan</h5>
                        <p class="text-muted small">
                            Industri kayu dan furniture dengan nilai ekonomi tinggi
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card h-100 p-4 text-center hover-lift">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Pertanian</h5>
                        <p class="text-muted small">
                            Pertanian organik dan hasil bumi berkualitas
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card h-100 p-4 text-center hover-lift">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Kerajinan</h5>
                        <p class="text-muted small">
                            Kerajinan tangan dengan nilai seni dan budaya
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card h-100 p-4 text-center hover-lift">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Wisata</h5>
                        <p class="text-muted small">
                            Potensi wisata alam dan budaya yang menarik
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="display-4 fw-bold text-dark mb-4">
                        Komunitas yang Solid
                    </h2>
                    <p class="lead text-muted mb-4 fs-5">
                        Masyarakat Dusun Ngelampengan dikenal dengan semangat kebersamaan yang tinggi. 
                        Setiap warga saling mendukung dalam mengembangkan potensi desa dan meningkatkan 
                        kesejahteraan bersama.
                    </p>
                    <p class="text-muted mb-4">
                        Berbagai organisasi kemasyarakatan aktif dalam mendorong pembangunan desa, 
                        mulai dari kelompok tani, pengrajin, hingga organisasi pemuda yang inovatif.
                    </p>
                    <div class="row g-3">
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="stats-card text-center p-3 hover-lift">
                                <div class="stats-icon mb-2">
                                    <i class="fas fa-seedling text-success"></i>
                                </div>
                                <div class="stats-number fw-bold fs-3 text-success counter" data-target="5">0</div>
                                <div class="stats-label text-muted">Kelompok Tani</div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="stats-card text-center p-3 hover-lift">
                                <div class="stats-icon mb-2">
                                    <i class="fas fa-hammer text-warning"></i>
                                </div>
                                <div class="stats-number fw-bold fs-3 text-warning counter" data-target="3">0</div>
                                <div class="stats-label text-muted">Kelompok Pengrajin</div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="stats-card text-center p-3 hover-lift">
                                <div class="stats-icon mb-2">
                                    <i class="fas fa-users text-info"></i>
                                </div>
                                <div class="stats-number fw-bold fs-3 text-info counter" data-target="2">0</div>
                                <div class="stats-label text-muted">Organisasi Pemuda</div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="400">
                            <div class="stats-card text-center p-3 hover-lift">
                                <div class="stats-icon mb-2">
                                    <i class="fas fa-handshake text-primary"></i>
                                </div>
                                <div class="stats-number fw-bold fs-3 text-primary counter" data-target="1">0</div>
                                <div class="stats-label text-muted">Koperasi Desa</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="feature-card p-4 hover-lift">
                        <h3 class="fw-bold text-primary mb-4 text-center">
                            Program Pengembangan
                        </h3>
                        <div class="row g-3">
                            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                                <div class="d-flex align-items-center p-3 bg-light rounded hover-lift">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <span class="text-muted">Pelatihan UMKM dan Kewirausahaan</span>
                                </div>
                            </div>
                            <div class="col-12" data-aos="fade-left" data-aos-delay="200">
                                <div class="d-flex align-items-center p-3 bg-light rounded hover-lift">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <span class="text-muted">Pengembangan Teknologi Pertanian</span>
                                </div>
                            </div>
                            <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                                <div class="d-flex align-items-center p-3 bg-light rounded hover-lift">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <span class="text-muted">Pemasaran Digital untuk UMKM</span>
                                </div>
                            </div>
                            <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                                <div class="d-flex align-items-center p-3 bg-light rounded hover-lift">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <span class="text-muted">Pelestarian Budaya dan Tradisi</span>
                                </div>
                            </div>
                            <div class="col-12" data-aos="fade-left" data-aos-delay="500">
                                <div class="d-flex align-items-center p-3 bg-light rounded hover-lift">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <span class="text-muted">Pengembangan Wisata Desa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KKN Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-warning text-dark px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-users me-2"></i>
                        Program KKN
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    KKN UMBY 2025
                </h2>
                <p class="lead text-muted fs-5">
                    Program Kuliah Kerja Nyata Universitas Mercu Buana Yogyakarta di Dusun Ngelampengan
                </p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="pe-lg-5">
                        <h3 class="fw-bold text-primary mb-4">
                            Tentang Program KKN
                        </h3>
                        <p class="lead text-muted mb-4 fs-5">
                            Kuliah Kerja Nyata (KKN) adalah program pengabdian masyarakat yang diselenggarakan 
                            oleh Universitas Mercu Buana Yogyakarta untuk memberikan pengalaman langsung kepada mahasiswa 
                            dalam mengaplikasikan ilmu pengetahuan dan teknologi di masyarakat.
                        </p>
                        <p class="text-muted mb-4">
                            Di Dusun Ngelampengan, program KKN UMBY 2025 fokus pada pengembangan UMKM dan 
                            peningkatan ekonomi lokal melalui berbagai inovasi dan pelatihan yang 
                            disesuaikan dengan potensi dan kebutuhan masyarakat setempat.
                        </p>
                        <div class="row g-3">
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="stats-card text-center p-3 hover-lift">
                                    <div class="stats-icon mb-2">
                                        <i class="fas fa-user-graduate text-primary"></i>
                                    </div>
                                    <div class="stats-number fw-bold fs-3 text-primary counter" data-target="8">0</div>
                                    <div class="stats-label text-muted">Mahasiswa KKN</div>
                                </div>
                            </div>
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="200">
                                <div class="stats-card text-center p-3 hover-lift">
                                    <div class="stats-icon mb-2">
                                        <i class="fas fa-calendar-check text-success"></i>
                                    </div>
                                    <div class="stats-number fw-bold fs-3 text-success counter" data-target="45">0</div>
                                    <div class="stats-label text-muted">Hari Program</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="feature-card p-4 hover-lift">
                        <div class="text-center mb-4">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <!-- Logo KKN -->
                                <div class="me-4">
                                    <img src="{{ asset('images/logos/logo_kelompok.png') }}" alt="Logo KKN UMBY" class="kkn-logo" onerror="this.style.display='none'">
                                    <div class="kkn-logo-fallback" style="display: none;">
                                        <i class="fas fa-users-cog"></i>
                                    </div>
                                </div>
                                <!-- Logo UMBY -->
                                <div>
                                    <img src="{{ asset('images/logos/logo_bantul.png') }}" alt="Logo UMBY" class="ugm-logo" onerror="this.style.display='none'">
                                    <div class="ugm-logo-fallback" style="display: none;">
                                        <i class="fas fa-university"></i>
                                    </div>
                                </div>
                            </div>
                            <h4 class="fw-bold text-primary mb-3">Program Unggulan</h4>
                        </div>
                        <div class="row g-3">
                            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                                <div class="d-flex align-items-center p-3 bg-light rounded hover-lift">
                                    <i class="fas fa-laptop text-primary me-3"></i>
                                    <span class="text-muted">Website UMKM Digital</span>
                                </div>
                            </div>
                            <div class="col-12" data-aos="fade-left" data-aos-delay="200">
                                <div class="d-flex align-items-center p-3 bg-light rounded hover-lift">
                                    <i class="fas fa-chart-line text-success me-3"></i>
                                    <span class="text-muted">Pelatihan Pemasaran Digital</span>
                                </div>
                            </div>
                            <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                                <div class="d-flex align-items-center p-3 bg-light rounded hover-lift">
                                    <i class="fas fa-palette text-warning me-3"></i>
                                    <span class="text-muted">Pengembangan Branding Produk</span>
                                </div>
                            </div>
                            <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                                <div class="d-flex align-items-center p-3 bg-light rounded hover-lift">
                                    <i class="fas fa-handshake text-info me-3"></i>
                                    <span class="text-muted">Pendampingan UMKM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white position-relative overflow-hidden">
        <div class="cta-particles"></div>
        <div class="container text-center position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h2 class="display-4 fw-bold mb-4">
                        Mari Jelajahi UMKM Dusun Ngelampengan
                    </h2>
                    <p class="lead mb-5 fs-5">
                        Temukan berbagai produk berkualitas dari UMKM lokal Dusun Ngelampengan, Kapanewon Dlingo
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="{{ route('umkm') }}" class="btn btn-white btn-lg px-5 py-3 fw-bold text-primary hover-lift">
                            <i class="fas fa-store me-2"></i>
                            Lihat UMKM
                        </a>
                        <a href="{{ route('beranda') }}" class="btn btn-outline-light btn-lg px-5 py-3 hover-lift">
                            <i class="fas fa-home me-2"></i>
                            Kembali ke Beranda
                        </a>
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
        
        .cta-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 10% 90%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 90% 10%, rgba(255,255,255,0.1) 0%, transparent 50%);
            animation: ctaParticleFloat 15s ease-in-out infinite;
        }
        
        @keyframes ctaParticleFloat {
            0%, 100% { transform: translateX(0px) translateY(0px); }
            25% { transform: translateX(-10px) translateY(-10px); }
            50% { transform: translateX(10px) translateY(-5px); }
            75% { transform: translateX(-5px) translateY(10px); }
        }
        
        /* Responsive improvements */
        @media (max-width: 768px) {
            .display-3 {
                font-size: 2.5rem;
            }
            
            .display-4 {
                font-size: 2rem;
            }
            
            .hero-stats {
                flex-direction: column;
                gap: 1rem;
            }
            
            .stat-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.5rem 1rem;
                background: rgba(255,255,255,0.1);
                border-radius: 10px;
            }
            
            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .display-3 {
                font-size: 2rem;
            }
            
            .display-4 {
                font-size: 1.75rem;
            }
            
            .btn-lg {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
            }
            
            .feature-icon {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }
        }
        
        /* Performance improvements */
        .feature-card, .stats-card {
            will-change: transform;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* KKN Logo Styling */
        .kkn-logo, .ugm-logo {
            height: 80px;
            width: auto;
            object-fit: contain;
            border-radius: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .kkn-logo {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            padding: 8px;
        }

        .ugm-logo {
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            padding: 8px;
        }

        .kkn-logo-fallback, .ugm-logo-fallback {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .kkn-logo-fallback {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
        }

        .ugm-logo-fallback {
            background: linear-gradient(135deg, #1e40af, #3b82f6);
        }

        /* Responsive KKN logo */
        @media (max-width: 768px) {
            .kkn-logo, .ugm-logo, .kkn-logo-fallback, .ugm-logo-fallback {
                height: 60px;
                width: 60px;
            }
            
            .kkn-logo-fallback, .ugm-logo-fallback {
                font-size: 1.5rem;
            }
        }
        
        /* Touch Device Optimizations */
        .touch-device .btn,
        .touch-device .nav-link {
            -webkit-tap-highlight-color: rgba(37, 99, 235, 0.2);
        }
        
        .touch-device .feature-card:hover,
        .touch-device .stats-card:hover {
            transform: none;
        }
        
        .touch-device .feature-card:active,
        .touch-device .stats-card:active {
            transform: scale(0.98);
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
            document.querySelectorAll('.btn, .nav-link, .feature-card, .stats-card').forEach(element => {
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

        // Handle KKN logo fallback
        document.addEventListener('DOMContentLoaded', function() {
            const kknLogos = document.querySelectorAll('.kkn-logo, .ugm-logo');
            
            kknLogos.forEach(function(img) {
                img.addEventListener('error', function() {
                    this.style.display = 'none';
                    const fallback = this.parentElement.querySelector('.kkn-logo-fallback, .ugm-logo-fallback');
                    if (fallback) {
                        fallback.style.display = 'flex';
                    }
                });
                
                if (img.complete && img.naturalHeight === 0) {
                    img.style.display = 'none';
                    const fallback = img.parentElement.querySelector('.kkn-logo-fallback, .ugm-logo-fallback');
                    if (fallback) {
                        fallback.style.display = 'flex';
                    }
                }
            });
        });
    </script>
@endsection 