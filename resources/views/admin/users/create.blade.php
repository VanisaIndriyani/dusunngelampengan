@extends('layouts.admin')

@section('title', 'Tambah User')
@section('subtitle', 'Tambah user admin baru')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h5 class="mb-0"><i class="fas fa-user-plus me-2"></i>Tambah User Baru</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                               id="password" name="password" required>
                                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password')">
                                            <i class="fas fa-eye" id="password_icon"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Minimal 8 karakter</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
                                               id="password_confirmation" name="password_confirmation" required>
                                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password_confirmation')">
                                            <i class="fas fa-eye" id="password_confirmation_icon"></i>
                                        </button>
                                    </div>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Password Strength Indicator -->
                        <div class="mb-3" id="password_strength_container" style="display: none;">
                            <label class="form-label">Kekuatan Password</label>
                            <div class="d-flex align-items-center">
                                <span id="password_strength" class="fw-bold me-2">-</span>
                                <div class="progress flex-grow-1 me-2" style="height: 8px;">
                                    <div id="password_strength_bar" class="progress-bar" role="progressbar" style="width: 0%"></div>
                                </div>
                            </div>
                            <small class="text-muted">Password harus minimal 8 karakter dengan kombinasi huruf besar, kecil, angka, dan karakter khusus</small>
                        </div>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Informasi:</strong>
                            <ul class="mb-0 mt-2">
                                <li><strong>Admin:</strong> Akses penuh ke semua fitur admin panel</li>
                                <li><strong>RT:</strong> Akses terbatas untuk mengelola data RT</li>
                                <li>Password akan di-hash secara otomatis untuk keamanan</li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Kembali
                            </a>
                            <button type="submit" class="btn btn-admin">
                                <i class="fas fa-save me-2"></i>Simpan User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Toggle password visibility
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = document.getElementById(fieldId + '_icon');
    
    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        field.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}

// Password validation
document.addEventListener('DOMContentLoaded', function() {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');
    
    // Real-time password confirmation validation
    function validatePasswordConfirmation() {
        if (password.value && confirmPassword.value) {
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity('Password tidak cocok');
                confirmPassword.classList.add('is-invalid');
            } else {
                confirmPassword.setCustomValidity('');
                confirmPassword.classList.remove('is-invalid');
            }
        } else {
            confirmPassword.setCustomValidity('');
            confirmPassword.classList.remove('is-invalid');
        }
    }
    
    // Password strength validation
    function validatePasswordStrength() {
        const passwordValue = password.value;
        const strengthContainer = document.getElementById('password_strength_container');
        const minLength = 8;
        const hasUpperCase = /[A-Z]/.test(passwordValue);
        const hasLowerCase = /[a-z]/.test(passwordValue);
        const hasNumbers = /\d/.test(passwordValue);
        const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(passwordValue);
        
        // Show/hide strength indicator
        if (passwordValue.length > 0) {
            strengthContainer.style.display = 'block';
        } else {
            strengthContainer.style.display = 'none';
        }
        
        let strength = 0;
        if (passwordValue.length >= minLength) strength++;
        if (hasUpperCase) strength++;
        if (hasLowerCase) strength++;
        if (hasNumbers) strength++;
        if (hasSpecialChar) strength++;
        
        // Update password strength indicator
        const strengthIndicator = document.getElementById('password_strength');
        const strengthBar = document.getElementById('password_strength_bar');
        if (strengthIndicator && strengthBar) {
            let strengthText = '';
            let strengthClass = '';
            
            switch(strength) {
                case 0:
                case 1:
                    strengthText = 'Sangat Lemah';
                    strengthClass = 'bg-danger';
                    break;
                case 2:
                    strengthText = 'Lemah';
                    strengthClass = 'bg-warning';
                    break;
                case 3:
                    strengthText = 'Sedang';
                    strengthClass = 'bg-info';
                    break;
                case 4:
                    strengthText = 'Kuat';
                    strengthClass = 'bg-primary';
                    break;
                case 5:
                    strengthText = 'Sangat Kuat';
                    strengthClass = 'bg-success';
                    break;
            }
            
            strengthIndicator.textContent = strengthText;
            strengthIndicator.className = 'fw-bold me-2';
            strengthBar.className = 'progress-bar ' + strengthClass;
            strengthBar.style.width = strength * 20 + '%';
        }
    }
    
    // Event listeners
    if (password) {
        password.addEventListener('input', validatePasswordStrength);
        password.addEventListener('input', validatePasswordConfirmation);
    }
    
    if (confirmPassword) {
        confirmPassword.addEventListener('input', validatePasswordConfirmation);
    }
});
</script>

<style>
.progress-bar {
    transition: all 0.3s ease;
    border-radius: 4px;
}

.bg-danger { background-color: #dc3545 !important; }
.bg-warning { background-color: #ffc107 !important; }
.bg-info { background-color: #17a2b8 !important; }
.bg-primary { background-color: #007bff !important; }
.bg-success { background-color: #28a745 !important; }
</style>
@endsection
