<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') - Dusun Nglampengan</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
        html, body {
            height: 100%;
        }
        
        :root {
            --primary-blue: #2563eb;
            --secondary-blue: #1d4ed8;
            --light-blue: #dbeafe;
            --white: #ffffff;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-600: #4b5563;
            --gray-800: #1f2937;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --info: #3b82f6;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--gray-50);
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Sidebar Styles */
        .sidebar {
            background: linear-gradient(180deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            height: 100vh;
            width: 280px;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            flex-shrink: 0;
        }

        .sidebar-logo {
            width: 60px;
            height: 60px;
            background: var(--white);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .sidebar-title {
            color: var(--white);
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0;
        }

        .sidebar-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.8rem;
            margin: 0;
        }

        .sidebar-nav {
            padding: 20px 0;
            flex: 1;
            overflow-y: auto;
            padding-bottom: 40px;
        }

        .nav-item {
            margin-bottom: 5px;
        }
        
        .nav-item:last-child {
            margin-bottom: 20px;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .nav-link:hover {
            color: var(--white);
            background: rgba(255, 255, 255, 0.1);
            border-left-color: var(--white);
        }

        .nav-link.active {
            color: var(--white);
            background: rgba(255, 255, 255, 0.15);
            border-left-color: var(--white);
        }

        .nav-icon {
            width: 20px;
            margin-right: 15px;
            text-align: center;
        }

        .nav-text {
            font-weight: 500;
        }

        /* Sidebar Scrollbar Styling */
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 3px;
        }
        
        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }
        
        .sidebar-nav::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar-nav::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-nav::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 3px;
        }
        
        .sidebar-nav::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        /* Global Pagination Styling - Clean & Simple */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        .page-item {
            margin: 0;
        }
        
        .page-link {
            padding: 8px 12px;
            border: 1px solid #e2e8f0;
            color: #64748b;
            background-color: #fff;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 40px;
            font-size: 0.875rem;
        }
        
        .page-link:hover {
            background-color: #f1f5f9;
            border-color: #cbd5e1;
            color: #475569;
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .page-item.active .page-link {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            border-color: #2563eb;
            color: #fff;
            box-shadow: 0 2px 4px rgba(37, 99, 235, 0.3);
            font-weight: 600;
        }
        
        .page-item.disabled .page-link {
            color: #94a3b8;
            background-color: #f8fafc;
            border-color: #e2e8f0;
            cursor: not-allowed;
            opacity: 0.6;
        }
        
        .page-item.disabled .page-link:hover {
            transform: none;
            box-shadow: none;
        }
        
        /* Pagination Container - Improved */
        .pagination-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
            padding-top: 1rem;
            border-top: 1px solid #e2e8f0;
            gap: 10px;
        }
        
        /* Pagination Info Text */
        .pagination-info {
            font-size: 14px;
            color: #555;
            display: flex;
            align-items: center;
        }
        
        /* Pagination Navigation */
        .pagination-nav {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        /* Bootstrap Pagination Override */
        .pagination-nav .pagination {
            margin-bottom: 0;
        }
        
        .pagination-nav .page-link {
            border-radius: 6px;
            margin: 0 2px;
            padding: 8px 12px;
            border: 1px solid #e2e8f0;
            color: #64748b;
            background-color: #fff;
            transition: all 0.2s ease;
        }
        
        .pagination-nav .page-link:hover {
            background-color: #f1f5f9;
            border-color: #cbd5e1;
            color: #475569;
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .pagination-nav .page-item.active .page-link {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            border-color: #2563eb;
            color: #fff;
            box-shadow: 0 2px 4px rgba(37, 99, 235, 0.3);
            font-weight: 600;
        }
        
        .pagination-nav .page-item.disabled .page-link {
            color: #94a3b8;
            background-color: #f8fafc;
            border-color: #e2e8f0;
            cursor: not-allowed;
            opacity: 0.6;
        }
        
        .pagination-nav .page-item.disabled .page-link:hover {
            transform: none;
            box-shadow: none;
        }
        
        /* Responsive Pagination */
        @media (max-width: 768px) {
            .d-flex.justify-content-between.align-items-center.flex-wrap {
                flex-direction: column;
                gap: 15px;
            }
            
            .pagination-info {
                text-align: center;
            }
            
            .pagination-nav {
                justify-content: center;
            }
        }

        /* Sidebar Collapsed State */
        .sidebar.collapsed {
            transform: translateX(-100%);
        }
        
        .main-content.expanded {
            margin-left: 0;
        }
        
        .main-content.expanded .top-nav {
            left: 0;
        }

        /* Main Content */
        .main-content {
            margin-left: 280px;
            transition: all 0.3s ease;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Top Navigation */
        .top-nav {
            background: var(--white);
            border-bottom: 1px solid var(--gray-200);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            position: fixed;
            top: 0;
            right: 0;
            left: 280px;
            z-index: 999;
            height: 70px;
        }

        .toggle-sidebar {
            background: none;
            border: none;
            color: var(--gray-600);
            font-size: 1.2rem;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .toggle-sidebar:hover {
            background: var(--gray-100);
            color: var(--gray-800);
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: var(--primary-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            overflow: hidden;
        }
        
        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Dashboard User Avatar - Larger size */
        .admin-card .user-avatar {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            color: var(--gray-800);
            font-size: 0.9rem;
        }

        .user-role {
            color: var(--gray-600);
            font-size: 0.8rem;
        }

        /* Content Area */
        .content {
            padding: 30px;
            margin-top: 70px;
        }

        /* Stats Cards */
        .stats-card {
            background: var(--white);
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--gray-200);
            text-align: center;
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .stats-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: var(--white);
            font-size: 1.5rem;
        }

        .stats-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--gray-800);
            margin-bottom: 5px;
        }

        .stats-label {
            color: var(--gray-600);
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Cards */
        .card {
            background: var(--white);
            border-radius: 12px;
            border: 1px solid var(--gray-200);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .card-header {
            background: var(--white);
            border-bottom: 1px solid var(--gray-200);
            padding: 20px 25px;
            border-radius: 12px 12px 0 0;
        }

        .card-title {
            color: var(--gray-800);
            font-weight: 600;
            margin: 0;
        }

        .card-body {
            padding: 25px;
        }

        /* Tables */
        .table {
            margin: 0;
        }

        .table thead th {
            background: var(--gray-50);
            border: none;
            padding: 15px 20px;
            font-weight: 600;
            color: var(--gray-800);
            font-size: 0.9rem;
        }

        .table tbody td {
            padding: 15px 20px;
            border: none;
            border-bottom: 1px solid var(--gray-100);
        }

        /* Admin Card Styles - Consistent across all admin pages */
        .admin-card {
            background: var(--white);
            border-radius: 12px;
            border: 1px solid var(--gray-200);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .admin-card-header {
            background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            padding: 20px 25px;
            border-radius: 12px 12px 0 0;
        }

        .admin-card-header h5 {
            color: var(--gray-800);
            font-weight: 600;
            margin: 0;
        }

        .admin-card .card-body {
            padding: 25px;
        }

        /* Admin Button Styles */
        .btn-admin {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            border: none;
            color: var(--white);
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-admin:hover {
            background: linear-gradient(135deg, var(--secondary-blue) 0%, var(--primary-blue) 100%);
            color: var(--white);
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(37, 99, 235, 0.3);
        }

        /* Form Styles */
        .form-label {
            font-weight: 500;
            color: var(--gray-800);
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border: 1px solid var(--gray-300);
            border-radius: 8px;
            padding: 12px 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        /* Alert Styles */
        .alert {
            border-radius: 8px;
            border: none;
            padding: 16px 20px;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .alert-warning {
            background-color: #fef3c7;
            color: #92400e;
        }

        .alert-info {
            background-color: #dbeafe;
            color: #1e40af;
        }

        /* Badge Styles */
        .badge {
            font-size: 0.75rem;
            padding: 0.5rem 0.75rem;
            border-radius: 6px;
        }

        .bg-primary {
            background-color: var(--primary-blue) !important;
        }

        .bg-success {
            background-color: var(--success) !important;
        }

        .bg-warning {
            background-color: var(--warning) !important;
        }

        .bg-danger {
            background-color: var(--danger) !important;
        }

        .bg-info {
            background-color: var(--info) !important;
        }

        /* Dashboard Stats Cards */
        .bg-light {
            background-color: var(--gray-100) !important;
        }

        .text-primary {
            color: var(--primary-blue) !important;
        }

        .text-success {
            color: var(--success) !important;
        }

        .text-muted {
            color: var(--gray-600) !important;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .top-nav {
                left: 0;
            }
            
            .content {
                padding: 20px;
                margin-top: 70px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <i class="fas fa-tree" style="font-size: 2rem; color: var(--primary-blue);"></i>
            </div>
            <h5 class="sidebar-title">Dusun Nglampengan</h5>
            <p class="sidebar-subtitle">Admin Panel</p>
        </div>
        
        <div class="sidebar-nav">
            <div class="nav-item">
                <a href="{{ route('beranda') }}" class="nav-link" target="_blank">
                    <i class="fas fa-home nav-icon"></i>
                    <span class="nav-text">Website Utama</span>
                </a>
            </div>
            
            @if(Auth::user()->isAdmin())
                <div class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.umkm.index') }}" class="nav-link {{ request()->routeIs('admin.umkm.*') ? 'active' : '' }}">
                        <i class="fas fa-store nav-icon"></i>
                        <span class="nav-text">Data UMKM</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.kegiatan.index') }}" class="nav-link {{ request()->routeIs('admin.kegiatan.*') ? 'active' : '' }}">
                        <i class="fas fa-tasks nav-icon"></i>
                        <span class="nav-text">Data Kegiatan</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                        <i class="fas fa-users nav-icon"></i>
                        <span class="nav-text">Data Akun</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.content') }}" class="nav-link {{ request()->routeIs('admin.content.*') ? 'active' : '' }}">
                        <i class="fas fa-video nav-icon"></i>
                        <span class="nav-text">Data Video</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.settings') }}" class="nav-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                        <i class="fas fa-cog nav-icon"></i>
                        <span class="nav-text">Pengaturan</span>
                    </a>
                </div>
            @endif
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Navigation -->
        <div class="top-nav">
            <div class="d-flex align-items-center">
                <button class="toggle-sidebar me-3" id="toggle-sidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <div>
                    <h4 class="mb-0">@yield('page-title', 'Dashboard')</h4>
                    <small class="text-muted">@yield('page-subtitle', 'Selamat datang di admin panel Dusun Nglampengan')</small>
                </div>
            </div>
            
            <div class="user-menu">
                <div class="user-info">
                    <span class="user-name">{{ Auth::user()->name }}</span>
                    <span class="user-role">Admin</span>
                </div>
                <div class="user-avatar">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div class="dropdown">
                    <button class="btn btn-link text-muted" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('beranda') }}">
                            <i class="fas fa-home me-2"></i>Website Utama
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ session('warning') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Sidebar toggle functionality
        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });

        // Mobile sidebar toggle
        if (window.innerWidth <= 768) {
            document.getElementById('sidebar').classList.add('collapsed');
            document.getElementById('main-content').classList.add('expanded');
        }

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>

    @stack('scripts')
</body>
</html> 