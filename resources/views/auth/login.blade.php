<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Dusun Ngelampengan</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, 
                rgba(37, 99, 235, 0.1) 0%, 
                rgba(29, 78, 216, 0.1) 50%, 
                rgba(59, 130, 246, 0.1) 100%);
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { transform: translateX(0) translateY(0); }
            25% { transform: translateX(-10px) translateY(-10px); }
            50% { transform: translateX(10px) translateY(-5px); }
            75% { transform: translateX(-5px) translateY(10px); }
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 450px;
            margin: 2rem;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: var(--white);
            padding: 3rem 2rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .login-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .login-header .logo {
            width: 90px;
            height: 90px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            position: relative;
            z-index: 2;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            animation: pulse 2s ease-in-out infinite;
            color: var(--white);
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .login-header h3 {
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 2;
        }

        .login-header p {
            opacity: 0.9;
            font-weight: 400;
            position: relative;
            z-index: 2;
        }

        .login-body {
            padding: 2.5rem 2rem;
        }

        .form-label {
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
        }

        .form-control {
            border: 2px solid var(--gray-200);
            border-radius: 12px;
            padding: 0.875rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            background: var(--white);
        }

        .input-group-text {
            background: var(--gray-50);
            border: 2px solid var(--gray-200);
            border-right: none;
            color: var(--gray-600);
            border-radius: 12px 0 0 12px;
        }

        .input-group .form-control {
            border-left: none;
            border-radius: 0 12px 12px 0;
        }

        .input-group .form-control:focus + .input-group-text {
            border-color: var(--primary-blue);
            background: var(--light-blue);
            color: var(--primary-blue);
        }

        .btn-login {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            border: none;
            color: var(--white);
            font-weight: 600;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
            color: var(--white);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* Password Toggle Button */
        #togglePassword {
            border: 2px solid var(--gray-200);
            border-left: none;
            background: var(--gray-50);
            color: var(--gray-600);
            border-radius: 0 12px 12px 0;
            transition: all 0.3s ease;
        }

        #togglePassword:hover {
            background: var(--light-blue);
            color: var(--primary-blue);
            border-color: var(--primary-blue);
        }

        #togglePassword:focus {
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            border-color: var(--primary-blue);
        }

        .back-link {
            color: var(--white);
            text-decoration: none;
            position: absolute;
            top: 2rem;
            left: 2rem;
            font-weight: 500;
            transition: all 0.3s ease;
            z-index: 10;
            background: rgba(255, 255, 255, 0.1);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .back-link:hover {
            color: var(--white);
            transform: translateX(-5px);
            background: rgba(255, 255, 255, 0.2);
        }

        .alert {
            border-radius: 12px;
            border: none;
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-danger {
            background: linear-gradient(135deg, #fee2e2, #fecaca);
            color: #991b1b;
            border-left: 4px solid var(--danger);
        }

        .credentials-info {
            background: linear-gradient(135deg, var(--gray-50), var(--gray-100));
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 2rem;
            border: 1px solid var(--gray-200);
        }

        .credentials-info h6 {
            color: var(--gray-800);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .credentials-info .credential-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .credentials-info .credential-item i {
            width: 20px;
            margin-right: 0.75rem;
            color: var(--primary-blue);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .login-container {
                margin: 1rem;
            }

            .login-card {
                border-radius: 20px;
            }

            .login-header {
                padding: 2rem 1.5rem 1.5rem;
            }

            .login-header .logo {
                width: 70px;
                height: 70px;
                font-size: 2rem;
            }

            .login-body {
                padding: 2rem 1.5rem;
            }

            .back-link {
                top: 1rem;
                left: 1rem;
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }

            .floating-element {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .login-header {
                padding: 1.5rem 1rem 1rem;
            }

            .login-body {
                padding: 1.5rem 1rem;
            }

            .btn-login {
                padding: 0.875rem 1.5rem;
            }

            .credentials-info {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Background Elements -->
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>

    <a href="{{ route('beranda') }}" class="back-link">
        <i class="fas fa-arrow-left me-2"></i>Kembali ke Website
    </a>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3>Admin Panel</h3>
                <p>Dusun Ngelampengan</p>
                <small class="text-light opacity-75">KKN UMBY 2025</small>
            </div>
            
            <div class="login-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">
                            <i class="fas fa-envelope me-2"></i>Email Address
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" 
                                   placeholder="Masukkan email Anda" required autofocus>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock me-2"></i>Password
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                   id="password" name="password" placeholder="Masukkan password Anda" required>
                            <button type="button" class="btn" id="togglePassword">
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-login w-100">
                        <i class="fas fa-sign-in-alt me-2"></i>Masuk ke Admin Panel
                    </button>
                </form>

               
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Password Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            togglePassword.addEventListener('click', function() {
                // Toggle password visibility
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                
                // Toggle eye icon
                if (type === 'text') {
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            });

            // Add focus effects
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                });
            });


        });
    </script>
</body>
</html> 