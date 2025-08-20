@extends('layouts.admin')

@section('title', 'Pengaturan Akun Admin')
@section('subtitle', 'Kelola akun admin website')

@section('content')

<style>
/* Admin Account Settings Styling */
.admin-account-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 15px;
    padding: 1.5rem;
    border: 1px solid rgba(0,0,0,0.05);
}

.password-field-group {
    position: relative;
}

.password-toggle-btn {
    border: none;
    background: transparent;
    color: #6c757d;
    transition: all 0.3s ease;
}

.password-toggle-btn:hover {
    color: #495057;
    transform: scale(1.1);
}

.password-toggle-btn:focus {
    box-shadow: none;
    outline: none;
}

.password-strength-container {
    background: rgba(255,255,255,0.8);
    border-radius: 10px;
    padding: 1rem;
    border: 1px solid rgba(0,0,0,0.1);
    backdrop-filter: blur(10px);
}

.password-strength-bar {
    transition: all 0.3s ease;
    border-radius: 4px;
}

.password-strength-text {
    font-weight: 600;
    transition: all 0.3s ease;
}

/* Password strength colors */
.bg-danger { background-color: #dc3545 !important; }
.bg-warning { background-color: #ffc107 !important; }
.bg-info { background-color: #17a2b8 !important; }
.bg-primary { background-color: #007bff !important; }
.bg-success { background-color: #28a745 !important; }

/* Form improvements */
.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.input-group-text {
    background-color: #f8f9fa;
    border-color: #ced4da;
}

.alert-info {
    background: linear-gradient(135deg, #d1ecf1 0%, #bee5eb 100%);
    border: 1px solid #bee5eb;
    color: #0c5460;
}

/* Status badge styling */
.status-badge {
    font-size: 0.8rem;
    padding: 0.5rem 0.75rem;
    border-radius: 20px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .admin-account-section {
        padding: 1rem;
    }
    
    .password-strength-container {
        padding: 0.75rem;
    }
    
    .col-md-6 {
        margin-bottom: 1rem;
    }
}
</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h5 class="mb-0"><i class="fas fa-user-cog me-2"></i>Pengaturan Akun Admin</h5>
                </div>
                <div class="card-body p-4">
                <form action="{{ route('admin.settings.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    


                    <div class="mb-4">
                        <h6 class="mb-3">Pengaturan Akun Admin</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="admin_email" class="form-label">Email Admin <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('admin_email') is-invalid @enderror" 
                                           id="admin_email" name="admin_email" value="{{ old('admin_email', auth()->user()->email) }}" required>
                                    @error('admin_email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Email yang digunakan untuk login admin</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="admin_username" class="form-label">Username Admin</label>
                                    <input type="text" class="form-control @error('admin_username') is-invalid @enderror" 
                                           id="admin_username" name="admin_username" value="{{ old('admin_username', auth()->user()->username ?? '') }}" readonly>
                                    @error('admin_username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Username tidak dapat diubah</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="current_password" class="form-label">Password Saat Ini <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
                                               id="current_password" name="current_password" placeholder="Masukkan password saat ini">
                                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('current_password')">
                                            <i class="fas fa-eye" id="current_password_icon"></i>
                                        </button>
                                    </div>
                                    @error('current_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Diperlukan untuk mengubah password</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">Password Baru</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" 
                                               id="new_password" name="new_password" placeholder="Minimal 8 karakter">
                                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('new_password')">
                                            <i class="fas fa-eye" id="new_password_icon"></i>
                                        </button>
                                    </div>
                                    @error('new_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Kosongkan jika tidak ingin mengubah password</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Password Strength Indicator -->
                        <div class="row" id="password_strength_container" style="display: none;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Kekuatan Password</label>
                                    <div class="d-flex align-items-center">
                                        <span id="password_strength" class="fw-bold me-2">-</span>
                                        <div class="progress flex-grow-1 me-2" style="height: 8px;">
                                            <div id="password_strength_bar" class="progress-bar" role="progressbar" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <small class="text-muted">Password harus minimal 8 karakter dengan kombinasi huruf besar, kecil, angka, dan karakter khusus</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Konfirmasi Password Baru</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" 
                                               id="confirm_password" name="confirm_password" placeholder="Ulangi password baru">
                                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('confirm_password')">
                                            <i class="fas fa-eye" id="confirm_password_icon"></i>
                                        </button>
                                    </div>
                                    @error('confirm_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Harus sama dengan password baru</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Status Akun</label>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check form-switch me-3">
                                            <input class="form-check-input" type="checkbox" id="account_active" checked disabled>
                                            <label class="form-check-label" for="account_active">Aktif</label>
                                        </div>
                                        <span class="badge bg-success">Admin</span>
                                    </div>
                                    <small class="text-muted">Akun admin aktif dan dapat mengakses semua fitur</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Catatan:</strong> Untuk mengubah password, Anda harus mengisi field "Password Saat Ini" dan "Password Baru". 
                            Jika tidak ingin mengubah password, biarkan field password kosong.
                        </div>
                    </div>



                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-admin">
                            <i class="fas fa-save me-2"></i>Simpan Pengaturan
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
    const newPassword = document.getElementById('new_password');
    const confirmPassword = document.getElementById('confirm_password');
    const currentPassword = document.getElementById('current_password');
    
    // Real-time password confirmation validation
    function validatePasswordConfirmation() {
        if (newPassword.value && confirmPassword.value) {
            if (newPassword.value !== confirmPassword.value) {
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
        const password = newPassword.value;
        const strengthContainer = document.getElementById('password_strength_container');
        const minLength = 8;
        const hasUpperCase = /[A-Z]/.test(password);
        const hasLowerCase = /[a-z]/.test(password);
        const hasNumbers = /\d/.test(password);
        const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);
        
        // Show/hide strength indicator
        if (password.length > 0) {
            strengthContainer.style.display = 'block';
        } else {
            strengthContainer.style.display = 'none';
        }
        
        let strength = 0;
        if (password.length >= minLength) strength++;
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
            strengthIndicator.className = 'fw-bold me-2'; // Reset class for text
            strengthBar.className = 'progress-bar ' + strengthClass;
            strengthBar.style.width = strength * 20 + '%'; // 20% per strength point
        }
    }
    
    // Event listeners
    if (newPassword) {
        newPassword.addEventListener('input', validatePasswordStrength);
        newPassword.addEventListener('input', validatePasswordConfirmation);
    }
    
    if (confirmPassword) {
        confirmPassword.addEventListener('input', validatePasswordConfirmation);
    }
    
    // Form submission validation
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Check if password fields are filled correctly
            if (newPassword.value || confirmPassword.value) {
                if (!currentPassword.value) {
                    e.preventDefault();
                    alert('Password saat ini harus diisi untuk mengubah password');
                    currentPassword.focus();
                    return false;
                }
                
                if (newPassword.value !== confirmPassword.value) {
                    e.preventDefault();
                    alert('Password baru dan konfirmasi password tidak cocok');
                    confirmPassword.focus();
                    return false;
                }
                
                if (newPassword.value.length < 8) {
                    e.preventDefault();
                    alert('Password baru minimal 8 karakter');
                    newPassword.focus();
                    return false;
                }
            }
        });
    }
    
    // Auto-hide password fields after successful submission
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === 'true') {
        setTimeout(() => {
            if (newPassword) newPassword.value = '';
            if (confirmPassword) confirmPassword.value = '';
            if (currentPassword) currentPassword.value = '';
        }, 2000);
    }
});

// Show success message if redirected from successful update
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === 'true') {
        const successAlert = document.createElement('div');
        successAlert.className = 'alert alert-success alert-dismissible fade show';
        successAlert.innerHTML = `
            <i class="fas fa-check-circle me-2"></i>
            <strong>Berhasil!</strong> Pengaturan akun admin telah diperbarui.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        const form = document.querySelector('form');
        if (form) {
            form.parentNode.insertBefore(successAlert, form);
        }
    }
});
</script> 