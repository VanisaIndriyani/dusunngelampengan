@extends('layouts.app')

@section('title', 'QR Code - Dusun Ngelampengan')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-primary text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-qrcode me-2"></i>
                        QR Code
                    </span>
                </div>
                <h1 class="display-4 fw-bold text-dark mb-3">
                    QR Code <span class="text-primary">Dusun Ngelampengan</span>
                </h1>
                <p class="lead text-muted fs-5">
                    Scan QR code di bawah ini untuk mengakses website Dusun Ngelampengan
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="qr-card text-center p-5 hover-lift" data-aos="fade-up" data-aos-delay="200">
                        <div class="qr-container mb-4">
                            <div id="qrcode" class="d-flex justify-content-center"></div>
                        </div>
                        
                        <h4 class="fw-bold text-dark mb-3">Website Dusun Ngelampengan</h4>
                        <p class="text-muted mb-4">
                            Scan QR code ini dengan aplikasi kamera atau QR scanner di smartphone Anda
                        </p>
                        
                        <div class="qr-info bg-light p-3 rounded mb-4">
                            <small class="text-muted">
                                <i class="fas fa-info-circle me-2"></i>
                                URL: <span class="text-primary">{{ url('/beranda') }}</span>
                            </small>
                        </div>
                        
                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                            <a href="{{ url('/beranda') }}" target="_blank" class="btn btn-primary">
                                <i class="fas fa-external-link-alt me-2"></i>
                                Buka Website
                            </a>
                            <button onclick="downloadQR()" class="btn btn-outline-primary">
                                <i class="fas fa-download me-2"></i>
                                Download QR
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instructions Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="instructions-card p-4" data-aos="fade-up" data-aos-delay="400">
                        <h5 class="fw-bold text-dark mb-3">
                            <i class="fas fa-lightbulb text-warning me-2"></i>
                            Cara Menggunakan QR Code
                        </h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="instruction-item mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="instruction-number me-3">1</div>
                                        <div>
                                            <strong>Buka Aplikasi Kamera</strong>
                                            <p class="text-muted small mb-0">Gunakan aplikasi kamera bawaan smartphone</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="instruction-item mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="instruction-number me-3">2</div>
                                        <div>
                                            <strong>Arahkan ke QR Code</strong>
                                            <p class="text-muted small mb-0">Arahkan kamera ke QR code di atas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="instruction-item mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="instruction-number me-3">3</div>
                                        <div>
                                            <strong>Klik Notifikasi</strong>
                                            <p class="text-muted small mb-0">Klik notifikasi yang muncul di layar</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="instruction-item mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="instruction-number me-3">4</div>
                                        <div>
                                            <strong>Website Terbuka</strong>
                                            <p class="text-muted small mb-0">Website akan terbuka di browser</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- QR Code Library -->
<script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.3/build/qrcode.min.js"></script>

<style>
    .qr-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border: 1px solid rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .qr-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    
    .qr-container {
        background: white;
        padding: 20px;
        border-radius: 15px;
        border: 2px dashed #e9ecef;
        display: inline-block;
    }
    
    .qr-info {
        border-left: 4px solid var(--bs-primary);
    }
    
    .instructions-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .instruction-item {
        transition: all 0.3s ease;
    }
    
    .instruction-item:hover {
        transform: translateX(5px);
    }
    
    .instruction-number {
        width: 30px;
        height: 30px;
        background: linear-gradient(135deg, var(--bs-primary), #0056b3);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 0.9rem;
        flex-shrink: 0;
    }
    
    .hover-lift {
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .qr-card {
            padding: 2rem !important;
        }
        
        .qr-container {
            padding: 15px;
        }
        
        .instruction-number {
            width: 25px;
            height: 25px;
            font-size: 0.8rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Generate QR Code
        const qrcodeElement = document.getElementById('qrcode');
        const websiteUrl = '{{ url("/beranda") }}';
        
        QRCode.toCanvas(qrcodeElement, websiteUrl, {
            width: 200,
            margin: 2,
            color: {
                dark: '#2563eb',
                light: '#ffffff'
            }
        }, function (error) {
            if (error) {
                console.error('QR Code generation error:', error);
                qrcodeElement.innerHTML = '<div class="text-danger"><i class="fas fa-exclamation-triangle fa-2x mb-2"></i><br>QR Code tidak dapat dibuat</div>';
            }
        });
    });
    
    // Download QR Code function
    function downloadQR() {
        const canvas = document.querySelector('#qrcode canvas');
        if (canvas) {
            const link = document.createElement('a');
            link.download = 'qr-code-dusun-nglampengan.png';
            link.href = canvas.toDataURL();
            link.click();
        } else {
            alert('QR Code belum siap. Silakan tunggu sebentar.');
        }
    }
    
    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    }
</script>
@endsection
