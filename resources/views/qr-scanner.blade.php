@extends('layouts.app')

@section('title', 'QR Scanner - Dusun Ngelampengan')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge mb-3">
                    <span class="badge bg-success text-white px-4 py-2 fs-6 shadow-sm">
                        <i class="fas fa-qrcode me-2"></i>
                        QR Scanner
                    </span>
                </div>
                <h1 class="display-4 fw-bold text-dark mb-3">
                    Scan <span class="text-primary">QR Code</span>
                </h1>
                <p class="lead text-muted fs-5">
                    Scan QR code untuk mengakses informasi UMKM dan konten Dusun Ngelampengan
                </p>
            </div>

            <div class="row">
                <!-- Scanner Section -->
                <div class="col-lg-8 mb-4">
                    <div class="scanner-main-card p-4 hover-lift" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="fw-bold text-dark mb-3">
                            <i class="fas fa-camera text-primary me-2"></i>
                            Scanner Kamera
                        </h4>
                        
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
                            <button id="reset-scanner" class="btn btn-outline-warning btn-lg" style="display: none;">
                                <i class="fas fa-redo me-2"></i>
                                Reset
                            </button>
                        </div>
                        
                        <div class="scanner-info bg-light p-3 rounded">
                            <small class="text-muted">
                                <i class="fas fa-info-circle me-2"></i>
                                Pastikan kamera Anda mengizinkan akses untuk scanning QR code. Scanner akan otomatis berhenti setelah berhasil membaca QR code.
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- QR Code Display -->
                    <div class="qr-display-card p-4 hover-lift mb-4" data-aos="fade-up" data-aos-delay="300">
                        <h5 class="fw-bold text-dark mb-3">
                            <i class="fas fa-qrcode text-primary me-2"></i>
                            QR Code Website
                        </h5>
                        <p class="text-muted small mb-3">
                            Tampilkan QR code ini untuk di-scan oleh pengunjung
                        </p>
                        <div id="website-qrcode" class="mb-3 text-center"></div>
                        <a href="{{ route('qr-code') }}" class="btn btn-outline-primary btn-sm w-100">
                            <i class="fas fa-external-link-alt me-2"></i>
                            Lihat QR Code Lengkap
                        </a>
                    </div>

                    <!-- Scan History -->
                    <div class="scan-history-card p-4 hover-lift" data-aos="fade-up" data-aos-delay="400">
                        <h5 class="fw-bold text-dark mb-3">
                            <i class="fas fa-history text-info me-2"></i>
                            Riwayat Scan
                        </h5>
                        <div id="scan-history" class="scan-history-list">
                            <p class="text-muted small text-center">Belum ada riwayat scan</p>
                        </div>
                        <button id="clear-history" class="btn btn-outline-danger btn-sm w-100 mt-3" style="display: none;">
                            <i class="fas fa-trash me-2"></i>
                            Hapus Riwayat
                        </button>
                    </div>

                    <!-- Instructions -->
                    <div class="instructions-card p-4 hover-lift mt-4" data-aos="fade-up" data-aos-delay="500">
                        <h5 class="fw-bold text-dark mb-3">
                            <i class="fas fa-lightbulb text-warning me-2"></i>
                            Cara Menggunakan
                        </h5>
                        <div class="instruction-steps">
                            <div class="step-item mb-2">
                                <span class="step-number">1</span>
                                <span class="step-text">Klik "Mulai Scan"</span>
                            </div>
                            <div class="step-item mb-2">
                                <span class="step-number">2</span>
                                <span class="step-text">Izinkan akses kamera</span>
                            </div>
                            <div class="step-item mb-2">
                                <span class="step-number">3</span>
                                <span class="step-text">Arahkan ke QR code</span>
                            </div>
                            <div class="step-item">
                                <span class="step-number">4</span>
                                <span class="step-text">Hasil akan muncul otomatis</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- QR Scanner Library -->
<script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
<!-- QR Code Generator Library -->
<script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.3/build/qrcode.min.js"></script>

<style>
    .scanner-main-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border: 1px solid rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .scanner-main-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    
    .qr-reader-container {
        width: 100%;
        max-width: 500px;
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
    
    .qr-display-card, .scan-history-card, .instructions-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        border: 1px solid rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .qr-display-card:hover, .scan-history-card:hover, .instructions-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }
    
    .scan-history-list {
        max-height: 200px;
        overflow-y: auto;
    }
    
    .history-item {
        padding: 8px 12px;
        background: #f8f9fa;
        border-radius: 8px;
        margin-bottom: 8px;
        border-left: 3px solid var(--bs-primary);
        font-size: 0.85rem;
        word-break: break-all;
    }
    
    .history-item:hover {
        background: #e9ecef;
    }
    
    .step-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .step-number {
        width: 25px;
        height: 25px;
        background: linear-gradient(135deg, var(--bs-primary), #0056b3);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 0.8rem;
        flex-shrink: 0;
    }
    
    .step-text {
        font-size: 0.9rem;
        color: #6c757d;
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
        .scanner-main-card {
            padding: 1.5rem !important;
        }
        
        .qr-reader-container {
            max-width: 100%;
        }
        
        .scanner-controls .btn {
            margin-bottom: 0.5rem;
            width: 100%;
        }
        
        .scanner-controls {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .col-lg-4 {
            margin-top: 2rem;
        }
    }
    
    @media (max-width: 576px) {
        .scanner-main-card {
            padding: 1rem !important;
        }
        
        .qr-display-card, .scan-history-card, .instructions-card {
            padding: 1.5rem !important;
        }
    }
</style>

<script>
    // QR Scanner functionality
    let html5QrcodeScanner = null;
    let isScanning = false;
    let scanHistory = JSON.parse(localStorage.getItem('scanHistory') || '[]');
    
    // Initialize QR Scanner
    function initQRScanner() {
        const qrReader = document.getElementById('qr-reader');
        const startButton = document.getElementById('start-scanner');
        const stopButton = document.getElementById('stop-scanner');
        const resetButton = document.getElementById('reset-scanner');
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
        
        resetButton.addEventListener('click', function() {
            resetScanner();
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
            resetButton.style.display = 'inline-block';
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
            resetButton.style.display = 'none';
            qrReader.innerHTML = '<div class="text-center p-4"><i class="fas fa-camera fa-3x text-muted mb-3"></i><p class="text-muted">Kamera scanner telah dihentikan</p></div>';
        }
        
        function resetScanner() {
            stopScanner();
            resultsDiv.style.display = 'none';
            qrReader.innerHTML = '';
        }
        
        function onScanSuccess(decodedText, decodedResult) {
            // Stop scanner after successful scan
            stopScanner();
            
            // Add to scan history
            addToScanHistory(decodedText);
            
            // Display result
            resultsDiv.style.display = 'block';
            resultsDiv.innerHTML = `
                <div class="alert alert-success">
                    <h6><i class="fas fa-check-circle me-2"></i>QR Code Berhasil Di-scan!</h6>
                    <p class="mb-2"><strong>Hasil:</strong> ${decodedText}</p>
                    <div class="d-flex gap-2 flex-wrap">
                        <button onclick="openScannedURL('${decodedText}')" class="btn btn-sm btn-primary">
                            <i class="fas fa-external-link-alt me-1"></i>Buka Link
                        </button>
                        <button onclick="copyToClipboard('${decodedText}')" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-copy me-1"></i>Salin
                        </button>
                        <button onclick="resetScanner()" class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-redo me-1"></i>Scan Lagi
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
    
    // Add scan result to history
    function addToScanHistory(text) {
        const timestamp = new Date().toLocaleString('id-ID');
        const historyItem = {
            text: text,
            timestamp: timestamp
        };
        
        // Add to beginning of array
        scanHistory.unshift(historyItem);
        
        // Keep only last 10 items
        if (scanHistory.length > 10) {
            scanHistory = scanHistory.slice(0, 10);
        }
        
        // Save to localStorage
        localStorage.setItem('scanHistory', JSON.stringify(scanHistory));
        
        // Update display
        updateScanHistoryDisplay();
    }
    
    // Update scan history display
    function updateScanHistoryDisplay() {
        const historyDiv = document.getElementById('scan-history');
        const clearButton = document.getElementById('clear-history');
        
        if (scanHistory.length === 0) {
            historyDiv.innerHTML = '<p class="text-muted small text-center">Belum ada riwayat scan</p>';
            clearButton.style.display = 'none';
        } else {
            let historyHTML = '';
            scanHistory.forEach((item, index) => {
                historyHTML += `
                    <div class="history-item" onclick="copyToClipboard('${item.text}')" style="cursor: pointer;" title="Klik untuk menyalin">
                        <div class="fw-bold small">${item.text.substring(0, 30)}${item.text.length > 30 ? '...' : ''}</div>
                        <div class="text-muted" style="font-size: 0.75rem;">${item.timestamp}</div>
                    </div>
                `;
            });
            historyDiv.innerHTML = historyHTML;
            clearButton.style.display = 'block';
        }
    }
    
    // Clear scan history
    function clearScanHistory() {
        if (confirm('Apakah Anda yakin ingin menghapus semua riwayat scan?')) {
            scanHistory = [];
            localStorage.removeItem('scanHistory');
            updateScanHistoryDisplay();
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
    
    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize QR Scanner and generate website QR
        initQRScanner();
        generateWebsiteQR();
        updateScanHistoryDisplay();
        
        // Add event listener for clear history button
        document.getElementById('clear-history').addEventListener('click', clearScanHistory);
        
        // Initialize AOS if available
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                offset: 100
            });
        }
    });
</script>
@endsection
