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
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
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
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
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
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
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
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
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
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-4">
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="stats-card text-center p-4 hover-lift">
                                <div class="stats-icon mb-3">
                                    <i class="fas fa-calendar text-primary"></i>
                                </div>
                                <div class="stats-number fw-bold fs-2 text-primary counter" data-target="100">0</div>
                                <div class="stats-label text-muted">Tahun Sejarah</div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="stats-card text-center p-4 hover-lift">
                                <div class="stats-icon mb-3">
                                    <i class="fas fa-users text-success"></i>
                                </div>
                                <div class="stats-number fw-bold fs-2 text-success counter" data-target="500">0</div>
                                <div class="stats-label text-muted">Penduduk</div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="stats-card text-center p-4 hover-lift">
                                <div class="stats-icon mb-3">
                                    <i class="fas fa-store text-warning"></i>
                                </div>
                                <div class="stats-number fw-bold fs-2 text-warning counter" data-target="50">0</div>
                                <div class="stats-label text-muted">UMKM Aktif</div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="400">
                            <div class="stats-card text-center p-4 hover-lift">
                                <div class="stats-icon mb-3">
                                    <i class="fas fa-map text-info"></i>
                                </div>
                                <div class="stats-number fw-bold fs-2 text-info counter" data-target="1000">0</div>
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
    @if($videoContent)
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
                    {{ $videoContent->title }}
                </h2>
                <p class="lead text-muted fs-5">
                    {{ $videoContent->content }}
                </p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="video-container position-relative" style="border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ str_replace(['watch?v=', 'youtu.be/'], ['embed/', 'www.youtube.com/embed/'], $videoContent->video_url) }}?rel=0&modestbranding=1" 
                                    title="Video Dusun Ngelampengan" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen
                                    style="border-radius: 15px;"
                                    loading="lazy"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            </iframe>
                            <div class="video-fallback d-none" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #f8f9fa; display: flex; align-items: center; justify-content: center; flex-direction: column; border-radius: 15px;">
                                <i class="fas fa-video fa-3x text-muted mb-3"></i>
                                <h5 class="text-muted mb-2">Video Tidak Dapat Dimuat</h5>
                                <p class="text-muted text-center mb-3">Video YouTube tidak dapat ditampilkan. Silakan klik link di bawah untuk menonton langsung di YouTube.</p>
                                <a href="{{ $videoContent->video_url }}" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-external-link-alt me-2"></i>Tonton di YouTube
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- QR Scanner Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-success text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-qrcode me-2"></i>
                        QR Scanner
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    Scan <span class="text-primary">QR Code</span>
                </h2>
                <p class="lead text-muted fs-5">
                    Scan QR code untuk mengakses informasi UMKM dan konten Dusun Ngelampengan
                </p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="scanner-card text-center p-5 hover-lift" data-aos="fade-up" data-aos-delay="200">
                        <div class="scanner-container mb-4">
                            <div id="qr-reader" class="qr-reader-container"></div>
                            <div id="qr-reader-results" class="qr-results mt-3"></div>
                        </div>
                        
                        <div class="scanner-controls mb-4">
                            <button id="start-scanner" class="btn btn-primary btn-lg me-3">
                                <i class="fas fa-camera me-2"></i>
                                Mulai Scan
                            </button>
                            <button id="stop-scanner" class="btn btn-outline-secondary btn-lg" style="display: none;">
                                <i class="fas fa-stop me-2"></i>
                                Stop Scan
                            </button>
                        </div>
                        
                        <div class="scanner-info bg-light p-3 rounded">
                            <small class="text-muted">
                                <i class="fas fa-info-circle me-2"></i>
                                Pastikan kamera Anda mengizinkan akses untuk scanning QR code
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- QR Code Display Section -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-md-8">
                    <div class="qr-display-card text-center p-4 hover-lift" data-aos="fade-up" data-aos-delay="400">
                        <h4 class="fw-bold text-dark mb-3">
                            <i class="fas fa-qrcode text-primary me-2"></i>
                            QR Code Website
                        </h4>
                        <p class="text-muted mb-3">
                            Tampilkan QR code ini untuk di-scan oleh pengunjung
                        </p>
                        <div id="website-qrcode" class="mb-3"></div>
                        <a href="{{ route('qr-code') }}" class="btn btn-outline-primary">
                            <i class="fas fa-external-link-alt me-2"></i>
                            Lihat QR Code Lengkap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Section -->
    <section class="py-5 bg-white">
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
                    Logo Kabupaten Bantul dan Kelompok KKN UMBY 2025
                </p>
            </div>
            
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-right">
                    <div class="logo-card text-center p-4 hover-lift">
                        <div class="logo-container mb-3">
                            <img src="/images/logos/logo_bantul.png" alt="Logo Kabupaten Bantul" class="logo-img" onerror="this.style.display='none'">
                            <div class="logo-fallback" style="display: none;">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Kabupaten Bantul</h4>
                        <p class="text-muted mb-0">Daerah Istimewa Yogyakarta</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-left">
                    <div class="logo-card text-center p-4 hover-lift">
                        <div class="logo-container mb-3">
                            <img src="/images/logos/logo_kelompok.png" alt="Logo Kelompok KKN" class="logo-img" onerror="this.style.display='none'">
                            <div class="logo-fallback" style="display: none;">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">KKN Kelompok 19</h4>
                        <p class="text-muted mb-0">UMBY 2025</p>
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
        }
        
        .video-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }
        
        .video-container iframe {
            border-radius: 15px;
            transition: all 0.3s ease;
        }
        
        .video-fallback {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px dashed #dee2e6;
        }
        
        .video-fallback:hover {
            background: linear-gradient(135deg, #e9ecef 0%, #dee2e6 100%);
            border-color: #adb5bd;
        }
        
                 /* Logo Section Styling */
         .logo-card {
             background: white;
             border-radius: 15px;
             box-shadow: 0 5px 20px rgba(0,0,0,0.1);
             transition: all 0.3s ease;
             border: 1px solid rgba(0,0,0,0.05);
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
         }
         
         .logo-img {
             width: 100%;
             height: 100%;
             object-fit: contain;
             padding: 10px;
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
         
         /* QR Scanner Section Styling */
        .scanner-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .scanner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .qr-reader-container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .qr-reader-container video {
            width: 100%;
            border-radius: 15px;
        }
        
        .qr-results {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            border-left: 4px solid var(--bs-success);
            display: none;
        }
        
        .qr-display-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .qr-display-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        /* Logo Section Responsive */
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
             
             /* QR Scanner Mobile Responsive */
             .scanner-card {
                 padding: 2rem !important;
             }
             
             .qr-reader-container {
                 max-width: 300px;
             }
             
             .scanner-controls .btn {
                 margin-bottom: 0.5rem;
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
         }
        
        .contact-item {
            padding: 2rem 1rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .contact-item:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
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
             
             .contact-item {
                 padding: 1.5rem 1rem;
             }
             
             /* Video Section Mobile Responsive */
             .video-container {
                 margin: 0 1rem;
             }
             
             /* UMKM Section Mobile Responsive */
             .feature-card {
                 padding: 1.5rem !important;
             }
             
             .feature-card h5 {
                 font-size: 1rem;
                 margin-bottom: 0.5rem;
             }
             
             .feature-card p {
                 font-size: 0.85rem;
                 line-height: 1.4;
             }
             
             .feature-card .feature-icon {
                 width: 50px;
                 height: 50px;
                 font-size: 1.25rem;
                 margin-bottom: 1rem;
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
             
             /* UMKM Section Small Mobile Responsive */
             .feature-card {
                 padding: 1rem !important;
                 margin-bottom: 1rem;
             }
             
             .feature-card h5 {
                 font-size: 0.9rem;
                 margin-bottom: 0.5rem;
                 font-weight: 600;
             }
             
             .feature-card p {
                 font-size: 0.8rem;
                 line-height: 1.3;
                 margin-bottom: 0;
             }
             
             .feature-card .feature-icon {
                 width: 40px;
                 height: 40px;
                 font-size: 1rem;
                 margin-bottom: 0.75rem;
             }
             
             /* UMKM Section Grid Mobile */
             .row.g-4 {
                 gap: 0.75rem !important;
             }
             
             .col-lg-3.col-md-6 {
                 margin-bottom: 0.75rem;
             }
                  }
         
         /* Tablet Responsive */
         @media (max-width: 991px) and (min-width: 577px) {
             /* UMKM Section Tablet Responsive */
             .feature-card {
                 padding: 2rem !important;
             }
             
             .feature-card h5 {
                 font-size: 1.1rem;
                 margin-bottom: 0.75rem;
             }
             
             .feature-card p {
                 font-size: 0.9rem;
                 line-height: 1.4;
             }
             
             .feature-card .feature-icon {
                 width: 55px;
                 height: 55px;
                 font-size: 1.4rem;
                 margin-bottom: 1.25rem;
             }
             
             /* UMKM Grid Tablet */
             .col-lg-3.col-md-6 {
                 margin-bottom: 1rem;
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
    </style>

    <!-- QR Scanner Library -->
    <script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
    <!-- QR Code Generator Library -->
    <script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.3/build/qrcode.min.js"></script>
    
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
        
        // QR Scanner functionality
        let html5QrcodeScanner = null;
        let isScanning = false;
        
        // Initialize QR Scanner
        function initQRScanner() {
            const qrReader = document.getElementById('qr-reader');
            const startButton = document.getElementById('start-scanner');
            const stopButton = document.getElementById('stop-scanner');
            const resultsDiv = document.getElementById('qr-reader-results');
            
            if (!qrReader) return;
            
            startButton.addEventListener('click', function() {
                if (!isScanning) {
                    startScanner();
                }
            });
            
            stopButton.addEventListener('click', function() {
                if (isScanning) {
                    stopScanner();
                }
            });
            
            function startScanner() {
                html5QrcodeScanner = new Html5QrcodeScanner(
                    "qr-reader",
                    { 
                        fps: 10, 
                        qrbox: { width: 250, height: 250 },
                        aspectRatio: 1.0
                    },
                    false
                );
                
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
                
                isScanning = true;
                startButton.style.display = 'none';
                stopButton.style.display = 'inline-block';
                resultsDiv.style.display = 'none';
            }
            
            function stopScanner() {
                if (html5QrcodeScanner) {
                    html5QrcodeScanner.clear();
                    html5QrcodeScanner = null;
                }
                
                isScanning = false;
                startButton.style.display = 'inline-block';
                stopButton.style.display = 'none';
                qrReader.innerHTML = '<div class="text-center p-4"><i class="fas fa-camera fa-3x text-muted mb-3"></i><p class="text-muted">Kamera scanner telah dihentikan</p></div>';
            }
            
            function onScanSuccess(decodedText, decodedResult) {
                // Stop scanner after successful scan
                stopScanner();
                
                // Display result
                resultsDiv.style.display = 'block';
                resultsDiv.innerHTML = `
                    <div class="alert alert-success">
                        <h6><i class="fas fa-check-circle me-2"></i>QR Code Berhasil Di-scan!</h6>
                        <p class="mb-2"><strong>Hasil:</strong> ${decodedText}</p>
                        <div class="d-flex gap-2">
                            <button onclick="openScannedURL('${decodedText}')" class="btn btn-sm btn-primary">
                                <i class="fas fa-external-link-alt me-1"></i>Buka Link
                            </button>
                            <button onclick="copyToClipboard('${decodedText}')" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-copy me-1"></i>Salin
                            </button>
                        </div>
                    </div>
                `;
                
                // Auto-scroll to results
                resultsDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            
            function onScanFailure(error) {
                // Handle scan failure silently
                console.warn(`QR scan error = ${error}`);
            }
        }
        
        // Function to open scanned URL
        function openScannedURL(url) {
            if (url.startsWith('http://') || url.startsWith('https://')) {
                window.open(url, '_blank');
            } else {
                // If it's not a URL, treat it as text
                alert('Teks yang di-scan: ' + url);
            }
        }
        
        // Function to copy text to clipboard
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Teks berhasil disalin ke clipboard!');
            }).catch(function(err) {
                console.error('Gagal menyalin teks: ', err);
                // Fallback for older browsers
                const textArea = document.createElement('textarea');
                textArea.value = text;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                alert('Teks berhasil disalin ke clipboard!');
            });
        }
        
        // Generate website QR code
        function generateWebsiteQR() {
            const qrElement = document.getElementById('website-qrcode');
            if (qrElement) {
                const websiteUrl = '{{ url("/") }}';
                
                QRCode.toCanvas(qrElement, websiteUrl, {
                    width: 150,
                    margin: 2,
                    color: {
                        dark: '#2563eb',
                        light: '#ffffff'
                    }
                }, function (error) {
                    if (error) {
                        console.error('QR Code generation error:', error);
                        qrElement.innerHTML = '<div class="text-danger"><i class="fas fa-exclamation-triangle fa-2x mb-2"></i><br>QR Code tidak dapat dibuat</div>';
                    }
                });
            }
        }
        
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
                iframe.addEventListener('error', function() {
                    this.style.display = 'none';
                    const fallback = this.nextElementSibling;
                    if (fallback && fallback.classList.contains('video-fallback')) {
                        fallback.classList.remove('d-none');
                    }
                });
                
                // Check if iframe loaded successfully after 5 seconds
                setTimeout(function() {
                    if (iframe.contentWindow && iframe.contentWindow.location.href === 'about:blank') {
                        iframe.style.display = 'none';
                        const fallback = iframe.nextElementSibling;
                        if (fallback && fallback.classList.contains('video-fallback')) {
                            fallback.classList.remove('d-none');
                        }
                    }
                }, 5000);
            });
            
            // Initialize QR Scanner and generate website QR
            initQRScanner();
            generateWebsiteQR();
        });
    </script>
@endsection 