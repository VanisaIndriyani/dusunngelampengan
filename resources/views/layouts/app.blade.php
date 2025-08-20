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
        
        /* Mobile Button Improvements */
        @media (max-width: 768px) {
            .btn-lg {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
            }
            
            .btn {
                font-weight: 600;
                border-radius: 8px;
            }
            
            .d-flex.flex-column.flex-sm-row {
                flex-direction: column !important;
                gap: 0.75rem;
            }
            
            .d-flex.flex-column.flex-sm-row .btn {
                width: 100%;
                margin-bottom: 0;
            }
        }
        
        @media (max-width: 576px) {
            .btn-lg {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
            
            .btn {
                font-size: 0.9rem;
                padding: 0.5rem 1rem;
            }
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
        
        /* Mobile Hero Improvements */
        @media (max-width: 768px) {
            .min-vh-75 {
                min-height: 60vh;
            }
            
            .hero-section {
                padding: 3rem 0 2rem 0;
            }
            
            .hero-content {
                padding: 0 1rem;
            }
            
            .hero-badge {
                margin-bottom: 2rem;
            }
            
            .hero-badge .badge {
                font-size: 0.9rem;
                padding: 0.75rem 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .min-vh-75 {
                min-height: 50vh;
            }
            
            .hero-section {
                padding: 2rem 0 1.5rem 0;
            }
            
            .hero-badge .badge {
                font-size: 0.8rem;
                padding: 0.5rem 1rem;
            }
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
        
        /* Mobile Feature Card Improvements */
        @media (max-width: 768px) {
            .feature-card {
                margin-bottom: 1.5rem;
                padding: 1.5rem !important;
            }
            
            .feature-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }
            
            .feature-card h4,
            .feature-card h5 {
                font-size: 1.1rem;
                margin-bottom: 1rem;
            }
            
            .feature-card p {
                font-size: 0.9rem;
                line-height: 1.5;
            }
        }
        
        @media (max-width: 576px) {
            .feature-card {
                padding: 1rem !important;
                margin-bottom: 1rem;
            }
            
            .feature-card h4,
            .feature-card h5 {
                font-size: 1rem;
                margin-bottom: 0.75rem;
            }
            
            .feature-card p {
                font-size: 0.85rem;
            }
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
        
        /* Mobile Stats Improvements */
        @media (max-width: 768px) {
            .stats-card {
                padding: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .stats-number {
                font-size: 2.5rem;
            }
            
            .stats-label {
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 576px) {
            .stats-card {
                padding: 1rem;
                margin-bottom: 0.75rem;
            }
            
            .stats-number {
                font-size: 2rem;
            }
            
            .stats-label {
                font-size: 0.8rem;
            }
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



        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
            padding: 0.5rem 0;
            position: relative;
        }

        .brand-title {
            font-weight: 700;
            font-size: 1.4rem;
            color: var(--primary-blue);
            margin: 0;
            position: relative;
        }

        .brand-title::before {
            content: '';
            position: absolute;
            left: -15px;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 20px;
            background: linear-gradient(135deg, var(--gradient-blue-2), var(--gradient-blue-4));
            border-radius: 2px;
        }

        .brand-subtitle {
            font-size: 0.75rem;
            color: var(--gray);
            font-weight: 500;
            margin: 0;
            margin-top: 2px;
        }

        /* Responsive brand text adjustments */
        @media (max-width: 768px) {
            .brand-title {
                font-size: 1.2rem;
            }
            
            .brand-title::before {
                left: -12px;
                width: 2px;
                height: 18px;
            }
            
            .brand-subtitle {
                font-size: 0.65rem;
            }
            
            .navbar-brand {
                padding: 0.5rem 0;
            }
        }

        @media (max-width: 576px) {
            .brand-title {
                font-size: 1rem;
            }
            
            .brand-title::before {
                left: -10px;
                width: 2px;
                height: 16px;
            }
            
            .brand-subtitle {
                font-size: 0.6rem;
            }
            
            .navbar-brand {
                padding: 0.25rem 0;
            }
            
            .navbar {
                padding: 0.5rem 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .brand-title {
                font-size: 0.9rem;
            }
            
            .brand-title::before {
                left: -8px;
                width: 2px;
                height: 14px;
            }
            
            .brand-subtitle {
                font-size: 0.55rem;
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
        
        /* Mobile Navigation Improvements */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: var(--white);
                border-radius: 10px;
                margin-top: 1rem;
                padding: 1rem;
                box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            }
            
            .navbar-nav {
                gap: 0.5rem;
            }
            
            .navbar-nav .nav-link {
                text-align: center;
                padding: 0.75rem 1rem !important;
                margin: 0.25rem 0;
                border-radius: 10px;
                font-weight: 600;
            }
            
                    .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            background: var(--primary-blue);
            color: var(--white) !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.3);
        }
        
        /* Mobile Toggle Button */
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            border-radius: 8px;
            background: var(--light-blue);
            transition: all 0.3s ease;
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(37, 99, 235, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
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
            .footer {
                text-align: center;
                padding: 2rem 0;
            }
            
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
                margin: 1rem 0;
            }
            
            .contact-item {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
                margin-bottom: 1rem;
            }
            
            .contact-icon {
                align-self: center;
            }
            
            .footer-bottom {
                text-align: center;
                margin-top: 1.5rem;
                padding-top: 1rem;
            }
            
            .footer-bottom .text-md-end {
                text-align: center !important;
                margin-top: 1rem;
            }
            
            .footer h5 {
                font-size: 1.1rem;
                margin-bottom: 1rem;
            }
            
            .footer p {
                font-size: 0.9rem;
                margin-bottom: 0.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .footer {
                padding: 1.5rem 0;
            }
            
            .footer h5 {
                font-size: 1rem;
            }
            
            .footer p {
                font-size: 0.85rem;
            }
            
            .footer-bottom {
                margin-top: 1rem;
                padding-top: 0.75rem;
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
            
            /* Mobile Navigation */
            .navbar-nav {
                text-align: center;
                padding: 1rem 0;
            }
            
            .navbar-nav .nav-link {
                padding: 0.75rem 1rem !important;
                margin: 0.25rem 0;
                border-radius: 10px;
            }
            
            /* Mobile Hero Section */
            .hero-section {
                padding: 2rem 0 !important;
            }
            
            .hero-section h1 {
                font-size: 2rem !important;
                line-height: 1.2;
            }
            
            .hero-section .lead {
                font-size: 1rem !important;
            }
            
            .hero-stats {
                flex-direction: column;
                gap: 1rem;
            }
            
            .stat-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.75rem 1rem;
                background: rgba(255,255,255,0.1);
                border-radius: 10px;
                backdrop-filter: blur(10px);
            }
            
            /* Mobile Buttons */
            .btn-lg {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
            }
            
            .d-flex.flex-column.flex-sm-row {
                flex-direction: column !important;
            }
            
            .d-flex.flex-column.flex-sm-row .btn {
                margin-bottom: 0.5rem;
                width: 100%;
            }
            
            /* Mobile Cards */
            .feature-card {
                margin-bottom: 1rem;
            }
            
            .feature-card h4, .feature-card h5 {
                font-size: 1.1rem;
            }
            
            .feature-card p {
                font-size: 0.9rem;
            }
            
            /* Mobile Stats */
            .stats-card {
                padding: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .stats-number {
                font-size: 2rem;
            }
            
            /* Mobile Footer */
            .footer {
                text-align: center;
            }
            
            .footer .text-md-end {
                text-align: center !important;
                margin-top: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            /* Extra Small Mobile */
            .hero-section h1 {
                font-size: 1.75rem !important;
            }
            
            .hero-section .lead {
                font-size: 0.9rem !important;
            }
            
            .hero-badge .badge {
                font-size: 0.8rem;
                padding: 0.5rem 1rem;
            }
            
            .section-badge .badge {
                font-size: 0.8rem;
                padding: 0.5rem 1rem;
            }
            
            .display-4 {
                font-size: 1.75rem;
            }
            
            .display-3 {
                font-size: 2rem;
            }
            
            .btn-lg {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
            
            .feature-icon {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }
            
            .stats-card {
                padding: 1rem;
            }
            
            .stats-number {
                font-size: 1.75rem;
            }
            
            .navbar-brand .brand-title {
                font-size: 0.9rem;
            }
            
            .navbar-brand .brand-subtitle {
                font-size: 0.5rem;
            }
            
            /* Container padding for mobile */
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            
            /* Mobile spacing */
            .py-5 {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }
            
            .mb-5 {
                margin-bottom: 2rem !important;
            }
            
            .mt-5 {
                margin-top: 2rem !important;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Mobile Touch Improvements */
        @media (max-width: 768px) {
            /* Ensure touch targets are at least 44px */
            .btn, .nav-link, .navbar-toggler {
                min-height: 44px;
                min-width: 44px;
            }
            
            /* Improve touch feedback */
            .btn:active, .nav-link:active {
                transform: scale(0.95);
            }
            
            /* Better scrolling on mobile */
            body {
                -webkit-overflow-scrolling: touch;
            }
            
            /* Prevent zoom on input focus */
            input, select, textarea {
                font-size: 16px !important;
            }
        }
        
        /* Mobile Container and Spacing Improvements */
        @media (max-width: 768px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            
            .py-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }
            
            .mb-5 {
                margin-bottom: 3rem !important;
            }
            
            .mt-5 {
                margin-top: 3rem !important;
            }
            
            .section-badge {
                margin-bottom: 2rem;
            }
            
            .display-4 {
                font-size: 2rem;
                line-height: 1.2;
            }
            
            .display-3 {
                font-size: 2.5rem;
                line-height: 1.2;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }
            
            .py-5 {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }
            
            .mb-5 {
                margin-bottom: 2rem !important;
            }
            
            .mt-5 {
                margin-top: 2rem !important;
            }
            
            .section-badge {
                margin-bottom: 1.5rem;
            }
            
            .display-4 {
                font-size: 1.75rem;
            }
            
            .display-3 {
                font-size: 2rem;
            }
            
            .lead {
                font-size: 1rem !important;
            }
            
            /* Mobile Grid Improvements */
            .row {
                margin-left: -0.5rem;
                margin-right: -0.5rem;
            }
            
            .col, .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, 
            .col-7, .col-8, .col-9, .col-10, .col-11, .col-12 {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }
            
            /* Mobile spacing utilities */
            .g-3 {
                gap: 1rem !important;
            }
            
            .g-4 {
                gap: 1rem !important;
            }
            
            .g-5 {
                gap: 1rem !important;
            }
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
        
        /* Mobile Performance Optimizations */
        @media (max-width: 768px) {
            /* Reduce animations on mobile for better performance */
            .feature-card:hover {
                transform: translateY(-3px);
                transition: transform 0.2s ease;
            }
            
            /* Optimize shadows for mobile */
            .feature-card {
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            }
            
            .feature-card:hover {
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            }
            
            /* Reduce complex gradients on mobile */
            .hero-section::before {
                opacity: 0.1;
            }
            
            /* Optimize text rendering */
            body {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-rendering: optimizeLegibility;
            }
        }
        
        /* Touch Device Optimizations */
        .touch-device .btn,
        .touch-device .nav-link {
            -webkit-tap-highlight-color: rgba(37, 99, 235, 0.2);
        }
        
        .touch-device .feature-card:hover {
            transform: none;
        }
        
        .touch-device .feature-card:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="d-flex align-items-center">
                    <div class="brand-text">
                        <span class="brand-title">Dusun Ngelampengan</span>
                       
                    </div>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') || request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">
                            <i class="fas fa-home d-lg-none me-2"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('umkm') ? 'active' : '' }}" href="{{ route('umkm') }}">
                            <i class="fas fa-store d-lg-none me-2"></i>UMKM
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                            <i class="fas fa-info-circle d-lg-none me-2"></i>Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}" target="_blank">
                            <i class="fas fa-user me-1"></i><span class="d-none d-lg-inline"></span>
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
                 
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">&copy; {{ date('Y') }} Dusun Ngelampengan. Semua hak dilindungi.</p>
                </div>
            </div>
            <!-- Mobile Footer -->
            <div class="row d-md-none mt-3">
                <div class="col-12 text-center">
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('beranda') }}" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-home me-1"></i>Beranda
                        </a>
                        <a href="{{ route('umkm') }}" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-store me-1"></i>UMKM
                        </a>
                        <a href="{{ route('about') }}" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-info-circle me-1"></i>Tentang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Navigation Script -->
    <script>
        // Handle navigation improvements
        document.addEventListener('DOMContentLoaded', function() {
            
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
            
            // Add smooth scrolling for mobile
            const isMobile = window.innerWidth <= 768;
            if (isMobile) {
                document.documentElement.style.scrollBehavior = 'smooth';
            }
            
            // Optimize touch interactions
            if ('ontouchstart' in window) {
                document.body.classList.add('touch-device');
            }
        });
        
        // Handle window resize
        window.addEventListener('resize', function() {
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (window.innerWidth >= 992 && navbarCollapse) {
                navbarCollapse.classList.remove('show');
            }
        });
    </script>

</body>
</html> 