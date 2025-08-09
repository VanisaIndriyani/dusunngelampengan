<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code - Dusun Ngelampengan</title>
    
    <!-- QR Code Library -->
    <script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.3/build/qrcode.min.js"></script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: white;
            color: #333;
            line-height: 1.6;
        }
        
        .print-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #2563eb;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #2563eb;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .header p {
            font-size: 1.2rem;
            color: #666;
        }
        
        .qr-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            gap: 40px;
        }
        
        .qr-code-container {
            flex: 1;
            text-align: center;
            padding: 20px;
            border: 2px solid #2563eb;
            border-radius: 15px;
            background: #f8f9fa;
        }
        
        .qr-code {
            margin: 20px 0;
        }
        
        .info-section {
            flex: 1;
            padding: 20px;
        }
        
        .info-section h3 {
            color: #2563eb;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .info-item {
            margin-bottom: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #2563eb;
        }
        
        .info-item strong {
            color: #2563eb;
        }
        
        .instructions {
            background: #e3f2fd;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .instructions h3 {
            color: #1976d2;
            margin-bottom: 15px;
        }
        
        .instruction-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }
        
        .step {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            background: white;
            border-radius: 8px;
        }
        
        .step-number {
            width: 30px;
            height: 30px;
            background: #2563eb;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
        }
        
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #ddd;
            color: #666;
        }
        
        .logo-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 30px 0;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
        }
        
        .logo-item {
            text-align: center;
        }
        
        .logo-item h4 {
            color: #2563eb;
            margin-bottom: 5px;
        }
        
        .logo-item p {
            color: #666;
            font-size: 0.9rem;
        }
        
        /* Print Styles */
        @media print {
            body {
                background: white;
            }
            
            .print-container {
                max-width: none;
                margin: 0;
                padding: 10px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .qr-section {
                flex-direction: column;
                gap: 20px;
            }
            
            .qr-code-container {
                border: 2px solid #000;
            }
            
            .info-section {
                padding: 10px;
            }
            
            .instructions {
                background: #f0f0f0;
                border: 1px solid #ccc;
            }
            
            .step {
                background: white;
                border: 1px solid #ddd;
            }
            
            .logo-section {
                background: #f0f0f0;
                border: 1px solid #ccc;
            }
        }
        
        /* Mobile Responsive */
        @media (max-width: 768px) {
            .qr-section {
                flex-direction: column;
                gap: 20px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .instruction-steps {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="print-container">
        <!-- Header -->
        <div class="header">
            <h1>QR Code Website</h1>
            <p>Dusun Ngelampengan - Kapanewon Dlingo, Bantul, DIY</p>
            <p>KKN UMBY 2025</p>
        </div>
        
        <!-- QR Code Section -->
        <div class="qr-section">
            <div class="qr-code-container">
                <h3>Scan QR Code</h3>
                <div id="qrcode" class="qr-code"></div>
                <p><strong>Website:</strong> {{ url('/beranda') }}</p>
                <p><small>Scan dengan aplikasi kamera smartphone</small></p>
            </div>
            
            <div class="info-section">
                <h3>Informasi Website</h3>
                <div class="info-item">
                    <strong>Nama:</strong> Dusun Ngelampengan
                </div>
                <div class="info-item">
                    <strong>Lokasi:</strong> Kapanewon Dlingo, Bantul, DIY
                </div>
                <div class="info-item">
                    <strong>Fitur:</strong> Informasi UMKM, Profil Dusun, Video
                </div>
                <div class="info-item">
                    <strong>Program:</strong> KKN UMBY 2025
                </div>
            </div>
        </div>
        
        <!-- Instructions -->
        <div class="instructions">
            <h3>Cara Menggunakan QR Code</h3>
            <div class="instruction-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div>Buka aplikasi kamera di smartphone</div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div>Arahkan kamera ke QR code di atas</div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div>Klik notifikasi yang muncul</div>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div>Website akan terbuka di browser</div>
                </div>
            </div>
        </div>
        
        <!-- Logo Section -->
        <div class="logo-section">
            <div class="logo-item">
                <h4>Kabupaten Bantul</h4>
                <p>Daerah Istimewa Yogyakarta</p>
            </div>
            <div class="logo-item">
                <h4>KKN Kelompok 19</h4>
                <p>UMBY 2025</p>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p><strong>Dusun Ngelampengan</strong> - Website Resmi</p>
            <p>Dikelola oleh Kelompok KKN UMBY 2025</p>
            <p>Untuk informasi lebih lanjut, silakan scan QR code di atas</p>
        </div>
    </div>
    
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
                    qrcodeElement.innerHTML = '<div style="color: red; padding: 20px;"><strong>QR Code tidak dapat dibuat</strong><br>Silakan akses langsung: ' + websiteUrl + '</div>';
                }
            });
        });
        
        // Auto print when page loads (optional)
        // window.onload = function() {
        //     window.print();
        // };
    </script>
</body>
</html>

