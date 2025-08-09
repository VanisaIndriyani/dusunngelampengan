@extends('layouts.app')

@section('title', 'UMKM - Dusun Ngelampengan')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-white py-5 position-relative overflow-hidden">
        <div class="hero-bg-overlay"></div>
        <div class="hero-particles"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-8 mx-auto text-center hero-content" data-aos="fade-up" data-aos-duration="1000">
                    <div class="hero-badge mb-4 animate__animated animate__fadeInDown">
                        <span class="badge bg-white text-primary px-4 py-2 fs-6 shadow-sm">
                            <i class="fas fa-store me-2"></i>
                            UMKM Unggulan
                        </span>
                    </div>
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInUp">
                        UMKM Dusun Ngelampengan
                    </h1>
                    <p class="lead mb-4 fs-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Temukan berbagai produk berkualitas dari usaha mikro, kecil, dan menengah lokal kami
                    </p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#kategori" class="btn btn-white btn-lg px-5 py-3 fw-bold text-primary shadow-lg hover-lift">
                            <i class="fas fa-th-large me-2"></i>
                            Lihat Kategori
                        </a>
                        <a href="#produk" class="btn btn-outline-light btn-lg px-5 py-3 hover-lift">
                            <i class="fas fa-store me-2"></i>
                            Lihat Produk
                        </a>
                    </div>
                    
                    <!-- Stats Section -->
                    <div class="hero-stats d-flex justify-content-center gap-4 mt-5 animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="text-center stat-item">
                            <div class="fw-bold fs-4 counter" data-target="{{ count($umkm) }}">0</div>
                            <small class="text-light">UMKM Tersedia</small>
                        </div>
                        <div class="text-center stat-item">
                            <div class="fw-bold fs-4">100%</div>
                            <small class="text-light">Produk Lokal</small>
                        </div>
                        <div class="text-center stat-item">
                            <div class="fw-bold fs-4">24/7</div>
                            <small class="text-light">Layanan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="kategori" class="py-5 bg-light-green">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-primary text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-th-large me-2"></i>
                        Pilih Kategori
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    Kategori Produk
                </h2>
                <p class="lead text-muted fs-5">
                    Pilih kategori produk yang ingin Anda lihat
                </p>
            </div>
            
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <button class="category-btn w-100 h-100 active hover-lift" data-category="all">
                        <div class="category-icon mb-3">
                            <i class="fas fa-th-large"></i>
                        </div>
                        <h5 class="fw-bold">Semua Produk</h5>
                        <small class="text-muted">Lihat semua UMKM</small>
                    </button>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <button class="category-btn w-100 h-100 hover-lift" data-category="kayu">
                        <div class="category-icon mb-3">
                            <i class="fas fa-tree"></i>
                        </div>
                        <h5 class="fw-bold">Kerajinan Kayu</h5>
                        <small class="text-muted">Furniture & kerajinan</small>
                    </button>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <button class="category-btn w-100 h-100 hover-lift" data-category="makanan">
                        <div class="category-icon mb-3">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h5 class="fw-bold">Makanan</h5>
                        <small class="text-muted">Kuliner tradisional</small>
                    </button>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <button class="category-btn w-100 h-100 hover-lift" data-category="kerajinan">
                        <div class="category-icon mb-3">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h5 class="fw-bold">Kerajinan Tangan</h5>
                        <small class="text-muted">Seni & budaya</small>
                    </button>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <button class="category-btn w-100 h-100 hover-lift" data-category="jasa">
                        <div class="category-icon mb-3">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h5 class="fw-bold">Jasa</h5>
                        <small class="text-muted">Layanan profesional</small>
                    </button>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <button class="category-btn w-100 h-100 hover-lift" data-category="lainnya">
                        <div class="category-icon mb-3">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <h5 class="fw-bold">Lainnya</h5>
                        <small class="text-muted">Produk unik lainnya</small>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produk" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-success text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-star me-2"></i>
                        Produk Unggulan
                    </span>
                </div>
                <h2 class="display-4 fw-bold text-dark mb-3">
                    Produk Unggulan
                </h2>
                <p class="lead text-muted fs-5">
                    Berbagai produk berkualitas dari UMKM lokal kami
                </p>
            </div>
            
            <!-- Filter and Search -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-8 mx-auto">
                    <div class="search-filter-card p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text bg-primary text-white">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    <input type="text" class="form-control" id="searchInput" placeholder="Cari UMKM...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select" id="sortSelect">
                                    <option value="name">Urutkan: Nama</option>
                                    <option value="category">Urutkan: Kategori</option>
                                    <option value="newest">Terbaru</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                         <div class="row g-2 justify-content-center" id="products-grid">
                 @forelse($umkm as $index => $business)
                 <div class="col-lg-4 col-md-4 col-4 product-card" data-category="{{ $business->category }}" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="feature-card h-100 position-relative hover-lift">
                        <div class="product-image position-relative overflow-hidden">
                            @if($business->image)
                                <img src="{{ asset('storage/' . $business->image) }}" alt="{{ $business->name }}" class="img-fluid w-100 product-img">
                            @else
                                <div class="placeholder-image d-flex align-items-center justify-content-center">
                                    <i class="fas fa-store text-muted" style="font-size: 4rem;"></i>
                                </div>
                            @endif
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="tel:{{ $business->owner_phone }}" class="btn btn-light btn-sm me-2">
                                        <i class="fas fa-phone me-1"></i>Hubungi
                                    </a>
                                    <button class="btn btn-outline-light btn-sm" onclick="showDetails('{{ $business->name }}', '{{ $business->description }}', '{{ $business->owner_name }}', '{{ $business->owner_phone }}', '{{ $business->address }}', '{{ $business->image }}')">
                                        <i class="fas fa-info-circle me-1"></i>Detail
                                    </button>
                                </div>
                            </div>
                            <div class="category-badge">
                                <span class="badge bg-primary">{{ $business->category }}</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h4 class="fw-bold text-dark mb-0 product-title">{{ $business->name }}</h4>
                                <div class="rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                            <p class="text-muted mb-3 product-description">
                                {{ Str::limit($business->description, 120) }}
                            </p>
                            <div class="product-info mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-user text-primary me-2"></i>
                                    <small class="text-muted">{{ $business->owner_name }}</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt text-success me-2"></i>
                                    <small class="text-muted">{{ Str::limit($business->address, 50) }}</small>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="tel:{{ $business->owner_phone }}" class="btn btn-primary btn-lg w-100 hover-lift">
                                    <i class="fas fa-phone me-2"></i>
                                    Hubungi {{ $business->owner_name }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up">
                    <div class="empty-state">
                        <div class="empty-icon mb-4">
                            <i class="fas fa-store text-muted" style="font-size: 5rem;"></i>
                        </div>
                        <h4 class="text-muted mb-3">Belum ada UMKM yang tersedia</h4>
                        <p class="text-muted mb-4">UMKM akan segera ditambahkan ke dalam katalog kami</p>
                        <a href="{{ route('beranda') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-home me-2"></i>
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>
                @endforelse
            </div>
            
            <!-- Load More Button -->
            @if(count($umkm) > 6)
            <div class="text-center mt-5" data-aos="fade-up">
                <button class="btn btn-outline-primary btn-lg px-5 py-3 hover-lift" id="loadMoreBtn">
                    <i class="fas fa-plus me-2"></i>
                    Muat Lebih Banyak
                </button>
            </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white position-relative overflow-hidden">
        <div class="cta-particles"></div>
        <div class="container text-center position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h2 class="display-4 fw-bold mb-4">
                        Tertarik dengan Produk Kami?
                    </h2>
                    <p class="lead mb-5 fs-5">
                        Hubungi langsung UMKM lokal kami untuk mendapatkan produk berkualitas dengan harga terbaik
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="#produk" class="btn btn-white btn-lg px-5 py-3 fw-bold text-primary hover-lift">
                            <i class="fas fa-store me-2"></i>
                            Lihat Semua Produk
                        </a>
                        <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg px-5 py-3 hover-lift">
                            <i class="fas fa-info-circle me-2"></i>
                            Pelajari Sejarah
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Detail Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Detail UMKM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="modal-image-container">
                                <img src="" alt="" class="img-fluid rounded shadow-sm" id="modalImage" style="width: 100%; height: 250px; object-fit: cover;">
                                <div class="modal-image-placeholder d-none" id="modalImagePlaceholder">
                                    <i class="fas fa-store text-muted" style="font-size: 4rem;"></i>
                                    <p class="text-muted mt-2">Tidak ada gambar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 id="modalTitle" class="fw-bold mb-3 text-primary"></h4>
                            <p id="modalDescription" class="text-muted mb-3"></p>
                            <div class="mb-3">
                                <strong><i class="fas fa-user text-primary me-2"></i>Pemilik:</strong> 
                                <span id="modalOwner" class="ms-2"></span>
                            </div>
                            <div class="mb-3">
                                <strong><i class="fas fa-map-marker-alt text-success me-2"></i>Alamat:</strong> 
                                <span id="modalAddress" class="ms-2"></span>
                            </div>
                            <div class="mb-3">
                                <strong><i class="fas fa-phone text-info me-2"></i>Telepon:</strong> 
                                <span id="modalPhone" class="ms-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-primary" id="modalCallBtn">
                        <i class="fas fa-phone me-2"></i>Hubungi Sekarang
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional CSS for animations and improvements -->
    <style>
        /* Animate.css for smooth animations */
        @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
        
        /* AOS (Animate On Scroll) */
        @import url('https://unpkg.com/aos@2.3.1/dist/aos.css');
        
        /* Custom animations and improvements */
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
        
        .category-btn {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 15px;
            padding: 2rem 1rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        /* Category Button Responsive */
        @media (max-width: 768px) {
            .category-btn {
                padding: 1.5rem 1rem;
            }
            
            .category-btn h5 {
                font-size: 1rem;
                margin-bottom: 0.25rem;
            }
            
            .category-btn small {
                font-size: 0.8rem;
            }
        }
        
        @media (max-width: 576px) {
            .category-btn {
                padding: 1rem 0.75rem;
            }
            
            .category-btn h5 {
                font-size: 0.9rem;
                margin-bottom: 0.25rem;
            }
            
            .category-btn small {
                font-size: 0.75rem;
            }
            
            .category-btn .category-icon {
                font-size: 1.25rem;
                margin-bottom: 0.5rem;
            }
        }
        
        .category-btn:hover, .category-btn.active {
            border-color: var(--bs-primary);
            background: linear-gradient(135deg, var(--bs-primary), #0056b3);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .category-btn.active {
            background: linear-gradient(135deg, var(--bs-primary), #0056b3);
            color: white;
        }
        
        .category-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .search-filter-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .product-img {
            transition: all 0.3s ease;
            height: 200px;
            object-fit: cover;
        }
        
        .product-card:hover .product-img {
            transform: scale(1.05);
        }
        
        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .product-card:hover .product-overlay {
            opacity: 1;
        }
        
        .overlay-content {
            text-align: center;
        }
        
        .category-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
        }
        
        .rating {
            font-size: 0.8rem;
        }
        
        .product-info {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 10px;
        }
        
        .empty-state {
            padding: 3rem;
        }
        
        .empty-icon {
            opacity: 0.5;
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
        
                 /* Desktop Responsive */
         @media (min-width: 992px) {
             /* UMKM Grid Desktop 3 Columns */
             .row.g-2 {
                 gap: 1.5rem !important;
                 justify-content: center !important;
             }
             
             .col-lg-4.col-md-4.col-4 {
                 margin-bottom: 1.5rem;
             }
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
            
            .category-btn {
                padding: 1.5rem 1rem;
            }
            
            .category-icon {
                font-size: 2rem;
            }
            
            /* UMKM Product Cards Mobile Responsive */
            .product-card .feature-card {
                padding: 1.5rem !important;
            }
            
            .product-card h4 {
                font-size: 1.1rem;
                margin-bottom: 0.5rem;
            }
            
            .product-card p {
                font-size: 0.85rem;
                line-height: 1.4;
                margin-bottom: 1rem;
            }
            
            .product-img {
                height: 150px !important;
            }
            
            .product-info {
                padding: 0.75rem !important;
                margin-bottom: 1rem !important;
            }
            
            .product-info small {
                font-size: 0.8rem;
            }
            
            .product-card .btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
            
            .category-badge .badge {
                font-size: 0.7rem;
                padding: 0.25rem 0.5rem;
            }
            
            .rating {
                font-size: 0.7rem;
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
            
            .category-btn {
                padding: 1rem;
            }
            
            .category-icon {
                font-size: 1.5rem;
            }
            
                         /* UMKM Product Cards Small Mobile Responsive */
             .product-card .feature-card {
                 padding: 0.75rem !important;
                 margin-bottom: 0.5rem;
                 border-radius: 10px;
             }
             
             .product-card h4 {
                 font-size: 0.9rem;
                 margin-bottom: 0.25rem;
                 font-weight: 600;
                 line-height: 1.2;
             }
             
             .product-card p {
                 font-size: 0.7rem;
                 line-height: 1.2;
                 margin-bottom: 0.5rem;
                 display: -webkit-box;
                 -webkit-line-clamp: 2;
                 -webkit-box-orient: vertical;
                 overflow: hidden;
             }
             
             .product-img {
                 height: 100px !important;
                 border-radius: 8px;
             }
             
             .product-info {
                 padding: 0.4rem !important;
                 margin-bottom: 0.5rem !important;
                 border-radius: 6px;
             }
             
             .product-info small {
                 font-size: 0.65rem;
                 line-height: 1.2;
             }
             
             .product-card .btn {
                 padding: 0.3rem 0.6rem;
                 font-size: 0.7rem;
                 border-radius: 6px;
                 white-space: nowrap;
                 overflow: hidden;
                 text-overflow: ellipsis;
             }
             
             /* Compact mobile layout */
             .product-card .feature-card {
                 min-height: auto;
             }
             
             .product-card .text-center {
                 text-align: center !important;
             }
             
             .category-badge .badge {
                 font-size: 0.55rem;
                 padding: 0.2rem 0.4rem;
                 border-radius: 4px;
             }
             
             .rating {
                 font-size: 0.55rem;
             }
             
             /* UMKM Grid Mobile 3 Columns */
             .row.g-2 {
                 gap: 0.75rem !important;
                 justify-content: center !important;
             }
             
             .col-4 {
                 padding: 0.25rem;
             }
             
             .col-lg-4.col-md-4.col-4 {
                 margin-bottom: 0.5rem;
             }
             
             /* Hide some elements on mobile to save space */
             .product-card .rating {
                 display: none;
             }
             
             .product-card .product-info .d-flex:last-child {
                 display: none;
             }
             
             .product-card .product-overlay {
                 display: none;
             }
            
            /* Search Filter Mobile */
            .search-filter-card {
                padding: 1rem !important;
            }
            
            .search-filter-card .input-group {
                margin-bottom: 0.5rem;
            }
            
            .search-filter-card .form-control,
            .search-filter-card .form-select {
                font-size: 0.9rem;
                padding: 0.5rem 0.75rem;
            }
        }
        
                 /* Tablet Responsive */
         @media (max-width: 991px) and (min-width: 577px) {
             /* UMKM Product Cards Tablet Responsive */
             .product-card .feature-card {
                 padding: 1.5rem !important;
             }
             
             .product-card h4 {
                 font-size: 1.1rem;
                 margin-bottom: 0.5rem;
             }
             
             .product-card p {
                 font-size: 0.85rem;
                 line-height: 1.3;
                 margin-bottom: 1rem;
             }
             
             .product-img {
                 height: 140px !important;
             }
             
             .product-info {
                 padding: 0.75rem !important;
                 margin-bottom: 1rem !important;
             }
             
             .product-info small {
                 font-size: 0.8rem;
             }
             
             .product-card .btn {
                 padding: 0.5rem 1rem;
                 font-size: 0.9rem;
             }
             
             .category-badge .badge {
                 font-size: 0.7rem;
                 padding: 0.25rem 0.5rem;
             }
             
             .rating {
                 font-size: 0.7rem;
             }
             
             /* UMKM Grid Tablet 3 Columns */
             .row.g-2 {
                 gap: 1rem !important;
                 justify-content: center !important;
             }
             
             .col-lg-4.col-md-4.col-4 {
                 margin-bottom: 1rem;
             }
             
             /* Search Filter Tablet */
             .search-filter-card {
                 padding: 1.5rem !important;
             }
         }
        
        /* Loading optimization */
        .product-img {
            transition: all 0.3s ease;
        }
        
                 /* Performance improvements */
         .feature-card, .product-card, .category-btn {
             will-change: transform;
         }
         
         /* Center products grid */
         #products-grid {
             justify-content: center !important;
         }
         
         .product-card {
             display: flex;
             justify-content: center;
         }
        
        /* Modal Image Container */
        .modal-image-container {
            position: relative;
            min-height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
            border-radius: 8px;
            border: 2px dashed #dee2e6;
        }
        
        .modal-image-placeholder {
            text-align: center;
            color: #6c757d;
        }
        
        /* Modal Responsive */
        @media (max-width: 768px) {
            .modal-dialog {
                margin: 1rem;
            }
            
            .modal-body {
                padding: 1rem;
            }
            
            .modal-body h4 {
                font-size: 1.2rem;
                margin-bottom: 0.75rem;
            }
            
            .modal-body p {
                font-size: 0.9rem;
                line-height: 1.4;
            }
            
            .modal-body .mb-3 {
                margin-bottom: 0.75rem !important;
            }
            
            .modal-body strong {
                font-size: 0.9rem;
            }
            
            .modal-body span {
                font-size: 0.85rem;
            }
        }
        
        @media (max-width: 576px) {
            .modal-dialog {
                margin: 0.5rem;
            }
            
            .modal-body {
                padding: 0.75rem;
            }
            
            .modal-body h4 {
                font-size: 1.1rem;
                margin-bottom: 0.5rem;
            }
            
            .modal-body p {
                font-size: 0.85rem;
                line-height: 1.3;
            }
            
            .modal-body .mb-3 {
                margin-bottom: 0.5rem !important;
            }
            
            .modal-body strong {
                font-size: 0.85rem;
            }
            
            .modal-body span {
                font-size: 0.8rem;
            }
            
            .modal-footer .btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
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
        
        // Image loading optimization removed
        
        // Lazy loading removed for better compatibility
        
        // Category filtering
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const category = this.getAttribute('data-category');
                filterProducts(category);
            });
        });
        
        function filterProducts(category) {
            const products = document.querySelectorAll('.product-card');
            products.forEach(product => {
                const productCategory = product.getAttribute('data-category');
                if (category === 'all' || productCategory === category) {
                    product.style.display = 'block';
                    product.style.animation = 'fadeIn 0.5s ease-in-out';
                } else {
                    product.style.display = 'none';
                }
            });
        }
        
        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const products = document.querySelectorAll('.product-card');
            
            products.forEach(product => {
                const title = product.querySelector('.product-title').textContent.toLowerCase();
                const description = product.querySelector('.product-description').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
        
        // Sort functionality
        document.getElementById('sortSelect').addEventListener('change', function() {
            const sortBy = this.value;
            const productsGrid = document.getElementById('products-grid');
            const products = Array.from(productsGrid.children);
            
            products.sort((a, b) => {
                if (sortBy === 'name') {
                    const titleA = a.querySelector('.product-title').textContent;
                    const titleB = b.querySelector('.product-title').textContent;
                    return titleA.localeCompare(titleB);
                } else if (sortBy === 'category') {
                    const categoryA = a.getAttribute('data-category');
                    const categoryB = b.getAttribute('data-category');
                    return categoryA.localeCompare(categoryB);
                }
                return 0;
            });
            
            products.forEach(product => productsGrid.appendChild(product));
        });
        
        // Product detail modal
        function showDetails(name, description, owner, phone, address, image) {
            document.getElementById('modalTitle').textContent = name;
            document.getElementById('modalDescription').textContent = description;
            document.getElementById('modalOwner').textContent = owner;
            document.getElementById('modalPhone').textContent = phone;
            document.getElementById('modalAddress').textContent = address;
            document.getElementById('modalCallBtn').href = `tel:${phone}`;
            
            // Set modal image
            const modalImage = document.getElementById('modalImage');
            const modalImagePlaceholder = document.getElementById('modalImagePlaceholder');
            
            if (image && image.trim() !== '') {
                modalImage.src = `/storage/${image}`;
                modalImage.alt = name;
                modalImage.style.display = 'block';
                modalImagePlaceholder.classList.add('d-none');
            } else {
                modalImage.style.display = 'none';
                modalImagePlaceholder.classList.remove('d-none');
            }
            
            const modal = new bootstrap.Modal(document.getElementById('productModal'));
            modal.show();
        }
        
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
    </script>
@endsection 