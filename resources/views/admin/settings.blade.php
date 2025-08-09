@extends('layouts.admin')

@section('title', 'Pengaturan')
@section('subtitle', 'Konfigurasi website Dusun Ngelampengan')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h5 class="mb-0"><i class="fas fa-cog me-2"></i>Pengaturan Website</h5>
                </div>
                <div class="card-body p-4">
                <form action="{{ route('admin.settings.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <h6 class="mb-3">Informasi Website</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="site_name" class="form-label">Nama Website <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('site_name') is-invalid @enderror" 
                                           id="site_name" name="site_name" value="{{ old('site_name', 'Dusun Ngelampengan') }}" required>
                                    @error('site_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="site_description" class="form-label">Deskripsi Website <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('site_description') is-invalid @enderror" 
                                              id="site_description" name="site_description" rows="3" required>{{ old('site_description', 'Website resmi Dusun Ngelampengan - Pusat Kerajinan Kayu dan UMKM') }}</textarea>
                                    @error('site_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-4">
                        <h6 class="mb-3">Informasi Kontak</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contact_email" class="form-label">Email Kontak <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('contact_email') is-invalid @enderror" 
                                           id="contact_email" name="contact_email" value="{{ old('contact_email', 'info@dusunnglampengan.com') }}" required>
                                    @error('contact_email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contact_phone" class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('contact_phone') is-invalid @enderror" 
                                           id="contact_phone" name="contact_phone" value="{{ old('contact_phone', '+62 812-3456-7890') }}" required>
                                    @error('contact_phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('address') is-invalid @enderror" 
                                      id="address" name="address" rows="3" required>{{ old('address', 'Dusun Ngelampengan, Kecamatan Malang, Jawa Timur, Indonesia') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <hr>

                    <div class="mb-4">
                        <h6 class="mb-3">Pengaturan Sosial Media</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="facebook_url" class="form-label">Facebook URL</label>
                                    <input type="url" class="form-control @error('facebook_url') is-invalid @enderror" 
                                           id="facebook_url" name="facebook_url" value="{{ old('facebook_url', 'https://facebook.com/dusunnglampengan') }}">
                                    @error('facebook_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="instagram_url" class="form-label">Instagram URL</label>
                                    <input type="url" class="form-control @error('instagram_url') is-invalid @enderror" 
                                           id="instagram_url" name="instagram_url" value="{{ old('instagram_url', 'https://instagram.com/dusunnglampengan') }}">
                                    @error('instagram_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="youtube_url" class="form-label">YouTube URL</label>
                                    <input type="url" class="form-control @error('youtube_url') is-invalid @enderror" 
                                           id="youtube_url" name="youtube_url" value="{{ old('youtube_url', 'https://youtube.com/@dusunnglampengan') }}">
                                    @error('youtube_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="whatsapp_number" class="form-label">WhatsApp Number</label>
                                    <input type="text" class="form-control @error('whatsapp_number') is-invalid @enderror" 
                                           id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number', '+62 812-3456-7890') }}">
                                    @error('whatsapp_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-4">
                        <h6 class="mb-3">Pengaturan SEO</h6>
                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label">Meta Keywords</label>
                            <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" 
                                   id="meta_keywords" name="meta_keywords" 
                                   value="{{ old('meta_keywords', 'dusun ngelampengan, kerajinan kayu, umkm, furniture, ukiran kayu') }}">
                            <small class="text-muted">Pisahkan dengan koma</small>
                            @error('meta_keywords')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control @error('meta_description') is-invalid @enderror" 
                                      id="meta_description" name="meta_description" rows="3">{{ old('meta_description', 'Website resmi Dusun Ngelampengan - Pusat kerajinan kayu dan UMKM terbaik di Jawa Timur') }}</textarea>
                            @error('meta_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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