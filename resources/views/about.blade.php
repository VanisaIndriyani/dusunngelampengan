@extends('layouts.app')

@section('title', 'Tentang Kami - Dusun Ngelampengan')

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
                                    <img src="/images/logos/logo-kkn.png" alt="Logo KKN UMBY" class="kkn-logo" onerror="this.style.display='none'">
                                    <div class="kkn-logo-fallback" style="display: none;">
                                        <i class="fas fa-users-cog"></i>
                                    </div>
                                </div>
                                <!-- Logo UMBY -->
                                <div>
                                    <img src="/images/logos/logo-umby.png" alt="Logo UMBY" class="ugm-logo" onerror="this.style.display='none'">
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