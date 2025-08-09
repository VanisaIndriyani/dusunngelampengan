<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dusun Ngelampengan') - Website Resmi</title>
    <meta name="description" content="Website resmi Dusun Ngelampengan - Tempat UMKM dan produk berkualitas di Kapanewon Dlingo">
    <meta name="keywords" content="Dusun Ngelampengan, UMKM, Kapanewon Dlingo, dusun, wisata">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        /* Custom CSS Variables for Blue-White Theme */
        :root {
            --primary-blue: #2563eb; /* Blue-600 */
            --primary-blue-dark: #1d4ed8; /* Blue-700 */
            --secondary-blue: #dbeafe; /* Blue-100 */
            --accent-blue: #3b82f6; /* Blue-500 */
            --light-blue: #eff6ff; /* Blue-50 */
            --dark-blue: #1e40af; /* Blue-800 */
            
            /* Gradient Colors */
            --gradient-blue-1: #60a5fa; /* Blue-400 */
            --gradient-blue-2: #3b82f6; /* Blue-500 */
            --gradient-blue-3: #2563eb; /* Blue-600 */
            --gradient-blue-4: #1d4ed8; /* Blue-700 */
            --gradient-blue-5: #1e40af; /* Blue-800 */
            
            --white: #ffffff;
            --light-gray: #f8fafc;
            --gray: #6b7280;
            --dark-gray: #374151;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
        }

        /* Custom Bootstrap Overrides */
        .btn-primary {
            background: linear-gradient(135deg, 
                var(--gradient-blue-2), 
                var(--gradient-blue-3), 
                var(--gradient-blue-4));
            border: none;
            color: var(--white);
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background: linear-gradient(135deg, 
                var(--gradient-blue-3), 
                var(--gradient-blue-4), 
                var(--gradient-blue-5)) !important;
            border: none !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
        }

        .btn-outline-primary {
            color: var(--gradient-blue-3);
            border: 2px solid;
            border-image: linear-gradient(135deg, 
                var(--gradient-blue-2), 
                var(--gradient-blue-4)) 1;
            background: transparent;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover,
        .btn-outline-primary:focus,
        .btn-outline-primary:active {
            background: linear-gradient(135deg, 
                var(--gradient-blue-2), 
                var(--gradient-blue-4)) !important;
            border-color: transparent !important;
            color: var(--white) !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.2);
        }

        .text-primary {
            color: var(--primary-blue) !important;
        }

        .bg-primary {
            background-color: var(--primary-blue) !important;
        }

        .bg-light-blue {
            background-color: var(--light-blue);
        }

        .bg-secondary-blue {
            background-color: var(--secondary-blue);
        }

        /* White Button Styles */
        .btn-white {
            background: var(--white);
            border: 2px solid var(--white);
            color: var(--primary-blue);
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-white:hover,
        .btn-white:focus,
        .btn-white:active {
            background: var(--light-blue) !important;
            border-color: var(--light-blue) !important;
            color: var(--primary-blue) !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
        }

        /* Custom Components */
        .hero-section {
            background: linear-gradient(135deg, 
                var(--gradient-blue-1) 0%, 
                var(--gradient-blue-2) 25%, 
                var(--gradient-blue-3) 50%, 
                var(--gradient-blue-4) 75%, 
                var(--gradient-blue-5) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        .hero-badge .badge {
            font-size: 1rem;
            font-weight: 600;
            border-radius: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .hero-badge .badge i {
            color: var(--white);
        }

        .section-badge .badge {
            font-size: 0.9rem;
            font-weight: 600;
            border-radius: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .min-vh-75 {
            min-height: 75vh;
        }

        .feature-card {
            background: var(--white);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
            position: relative;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3), 
                var(--gradient-blue-4));
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: var(--white);
            font-size: 2rem;
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
        }

        .stats-card {
            background: linear-gradient(135deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3));
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            border: none;
            color: var(--white);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.2);
        }

        .stats-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 0.5rem;
        }

        .stats-label {
            color: var(--white);
            font-weight: 500;
            opacity: 0.9;
        }

        .product-card {
            background: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .product-image {
            height: 200px;
            background: linear-gradient(135deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 3rem;
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.2);
        }

        .category-btn {
            background: var(--white);
            border: 2px solid transparent;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: var(--dark-gray);
            position: relative;
            overflow: hidden;
        }

        .category-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .category-btn:hover,
        .category-btn.active {
            border-color: transparent;
            background: transparent;
            color: var(--white);
            text-decoration: none;
        }

        .category-btn:hover::before,
        .category-btn.active::before {
            opacity: 1;
        }

        .category-btn h5,
        .category-btn i {
            position: relative;
            z-index: 2;
        }

        .category-btn i {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .navbar {
            background: var(--white) !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-blue) !important;
        }

        /* Logo Styling */
        .navbar-logo {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-bantul, .logo-kelompok {
            height: 40px;
            width: auto;
            object-fit: contain;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .logo-bantul {
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            padding: 4px;
        }

        .logo-kelompok {
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            padding: 4px;
        }

        .logo-fallback {
            font-size: 1.5rem;
            color: var(--white);
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            padding: 8px;
            border-radius: 8px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .brand-title {
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--primary-blue);
        }

        .brand-subtitle {
            font-size: 0.7rem;
            color: var(--gray);
            font-weight: 500;
        }

        /* Responsive logo adjustments */
        @media (max-width: 768px) {
            .logo-bantul, .logo-kelompok {
                height: 35px;
            }
            
            .brand-title {
                font-size: 1.1rem;
            }
            
            .brand-subtitle {
                font-size: 0.6rem;
            }
        }

        @media (max-width: 576px) {
            .logo-bantul, .logo-kelompok {
                height: 30px;
            }
            
            .brand-title {
                font-size: 1rem;
            }
            
            .navbar-logo.me-3 {
                margin-right: 0.5rem !important;
            }
        }

        .navbar-nav .nav-link {
            color: var(--dark-gray) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary-blue) !important;
            background: var(--secondary-blue);
        }

        .footer {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--dark-blue) 100%);
            color: var(--white);
            position: relative;
            overflow: hidden;
            box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.1);
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3), 
                var(--gradient-blue-4), 
                var(--gradient-blue-5));
            box-shadow: 0 2px 10px rgba(59, 130, 246, 0.3);
        }

        /* Footer */
        .footer {
            background-color: #343a40;
        }

        .footer h5 {
            color: #ffffff;
            font-weight: 600;
        }

        .footer p {
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-logo-container {
            display: flex;
            align-items: center;
        }

        .footer-logo {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3), 
                var(--gradient-blue-4));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
            border: 3px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .footer-logo-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 50%;
            padding: 8px;
        }

        .footer-logo-fallback {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5rem;
            color: var(--white);
        }

        /* Social Links */
        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .social-link:hover {
            background: var(--white);
            color: var(--primary-blue);
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            border-color: var(--white);
        }

        /* Footer Sections */
        .footer-section {
            margin-bottom: 1rem;
        }

        .footer-title {
            color: var(--white);
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3), 
                var(--gradient-blue-4));
            border-radius: 2px;
        }

        /* Footer Links */
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
        }

        .footer-links a:hover {
            color: var(--white);
            transform: translateX(5px);
        }

        .footer-links a::before {
            content: '→';
            margin-right: 0.5rem;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .footer-links a:hover::before {
            opacity: 1;
        }

        /* Contact Info */
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1rem;
            flex-shrink: 0;
            box-shadow: 0 3px 10px rgba(59, 130, 246, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        .contact-details h6 {
            color: var(--white);
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .contact-details p {
            color: rgba(255, 255, 255, 0.8);
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        /* Footer Bottom */
        .footer-bottom {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 2px solid rgba(255, 255, 255, 0.15);
            background: rgba(0, 0, 0, 0.1);
            margin-left: -1rem;
            margin-right: -1rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .footer-bottom p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .footer-bottom .text-danger {
            color: var(--primary-blue) !important;
        }

        /* Responsive Footer */
        @media (max-width: 768px) {
            .footer-logo {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }
            
            .footer-brand h4 {
                font-size: 1.3rem;
            }
            
            .social-links {
                justify-content: center;
            }
            
            .contact-item {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }
            
            .contact-icon {
                align-self: center;
            }
            
            .footer-bottom {
                text-align: center;
            }
            
            .footer-bottom .text-md-end {
                text-align: center !important;
                margin-top: 1rem;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Loading animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--light-gray);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-blue);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-blue-dark);
        }

        /* Responsive improvements */
        @media (max-width: 768px) {
            .hero-section {
                min-height: 70vh;
            }
            
            .stats-number {
                font-size: 2.5rem;
            }
            
            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Video Section */
        .video-section iframe {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .video-section .feature-card {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Responsive Video */
        @media (max-width: 768px) {
            .video-section .ratio {
                border-radius: 10px;
            }
            
            .video-section iframe {
                border-radius: 10px;
            }
        }

        /* Enhanced Homepage Styles */
        .hero-bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .hero-shape-1 {
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .hero-shape-2 {
            position: absolute;
            bottom: -30px;
            left: -30px;
            width: 150px;
            height: 150px;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.03));
            border-radius: 50%;
            animation: float 8s ease-in-out infinite reverse;
        }

        .hero-main-image {
            position: relative;
            z-index: 2;
        }

        .hero-stats {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 1.5rem;
            margin-top: 2rem;
        }

        .feature-decoration {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, 
                var(--gradient-blue-1), 
                var(--gradient-blue-2), 
                var(--gradient-blue-3));
            border-radius: 2px;
        }

        .stats-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            font-size: 1.5rem;
        }

        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .product-card:hover .product-overlay {
            opacity: 1;
        }

        .placeholder-image {
            height: 200px;
            background: var(--light-blue);
            border-radius: 10px;
        }

        .empty-state {
            padding: 3rem 0;
        }

        .video-card {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="d-flex align-items-center">
                    <!-- Logo Kabupaten Bantul -->
                    <div class="navbar-logo me-2">
                        <img src="/images/logos/logo_bantul.png" alt="Logo Kabupaten Bantul" class="logo-bantul" onerror="this.style.display='none'">
                        <i class="fas fa-shield-alt logo-fallback" style="display: none;"></i>
                    </div>
                    <!-- Logo Kelompok KKN -->
                    <div class="navbar-logo me-3">
                        <img src="/images/logos/logo_kelompok.png" alt="Logo Kelompok KKN" class="logo-kelompok" onerror="this.style.display='none'">
                        <i class="fas fa-users logo-fallback" style="display: none;"></i>
                    </div>
                    <div class="brand-text">
                        <span class="brand-title">Dusun Ngelampengan</span>
                        <small class="brand-subtitle d-none d-sm-inline">KKN UMBY 2025</small>
                    </div>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') || request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('umkm') ? 'active' : '' }}" href="{{ route('umkm') }}">
                            UMKM
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('qr-scanner') ? 'active' : '' }}" href="{{ route('qr-scanner') }}">
                            <i class="fas fa-qrcode me-1"></i>QR Scanner
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}" target="_blank">
                            <i class="fas fa-cog me-1"></i>Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="margin-top: 76px;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Dusun Ngelampengan</h5>
                    <p class="mb-2">Kapanewon Dlingo, Bantul, DIY</p>
                    <p class="mb-0">KKN UMBY 2025</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">&copy; {{ date('Y') }} Dusun Ngelampengan. Semua hak dilindungi.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Logo Fallback Script -->
    <script>
        // Handle logo fallback when images fail to load
        document.addEventListener('DOMContentLoaded', function() {
            const logoImages = document.querySelectorAll('.logo-bantul, .logo-kelompok');
            
            logoImages.forEach(function(img) {
                img.addEventListener('error', function() {
                    // Hide the failed image
                    this.style.display = 'none';
                    
                    // Show the fallback icon
                    const fallback = this.parentElement.querySelector('.logo-fallback');
                    if (fallback) {
                        fallback.style.display = 'flex';
                    }
                });
                
                // Check if image loaded successfully
                if (img.complete && img.naturalHeight === 0) {
                    // Image failed to load
                    img.style.display = 'none';
                    const fallback = img.parentElement.querySelector('.logo-fallback');
                    if (fallback) {
                        fallback.style.display = 'flex';
                    }
                }
            });
        });
    </script>

</body>
</html> 