@extends('layouts.admin')

@section('title', 'Tambah Kegiatan - Admin Panel')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Tambah Kegiatan Baru</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul Kegiatan <span class="text-danger">*</span></label>
                                    <input type="text" 
                                           class="form-control @error('judul') is-invalid @enderror" 
                                           id="judul" 
                                           name="judul" 
                                           value="{{ old('judul') }}" 
                                           placeholder="Masukkan judul kegiatan" 
                                           required>
                                    @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                              id="deskripsi" 
                                              name="deskripsi" 
                                              rows="5" 
                                              placeholder="Masukkan deskripsi kegiatan" 
                                              required>{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="icon" class="form-label">Icon FontAwesome</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-icons"></i></span>
                                                <input type="text" 
                                                       class="form-control @error('icon') is-invalid @enderror" 
                                                       id="icon" 
                                                       name="icon" 
                                                       value="{{ old('icon') }}" 
                                                       placeholder="fas fa-star">
                                            </div>
                                            <small class="form-text text-muted">
                                                Contoh: fas fa-star, fas fa-tree, fas fa-hands-helping
                                            </small>
                                            @error('icon')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="urutan" class="form-label">Urutan</label>
                                            <input type="number" 
                                                   class="form-control @error('urutan') is-invalid @enderror" 
                                                   id="urutan" 
                                                   name="urutan" 
                                                   value="{{ old('urutan') }}" 
                                                   min="1" 
                                                   placeholder="Urutan tampilan">
                                            <small class="form-text text-muted">
                                                Kosongkan untuk urutan terakhir
                                            </small>
                                            @error('urutan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                    <select class="form-select @error('status') is-invalid @enderror" 
                                            id="status" 
                                            name="status" 
                                            required>
                                        <option value="">Pilih Status</option>
                                        <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="nonaktif" {{ old('status') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar Kegiatan</label>
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div id="imagePreview" class="mb-3">
                                                <div class="bg-light d-flex align-items-center justify-content-center" 
                                                     style="width: 200px; height: 200px; margin: 0 auto;">
                                                    <i class="fas fa-image fa-3x text-muted"></i>
                                                </div>
                                            </div>
                                            <input type="file" 
                                                   class="form-control @error('gambar') is-invalid @enderror" 
                                                   id="gambar" 
                                                   name="gambar" 
                                                   accept="image/*">
                                            <small class="form-text text-muted">
                                                Format: JPG, PNG, GIF. Maksimal 2MB
                                            </small>
                                            @error('gambar')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Preview Icon</label>
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div id="iconPreview" class="mb-2">
                                                <i class="fas fa-question-circle fa-3x text-muted"></i>
                                            </div>
                                            <small class="text-muted">Icon akan muncul di sini</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary">
                                        <i class="fas fa-times me-2"></i>Batal
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-2"></i>Simpan Kegiatan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image preview
    const imageInput = document.getElementById('gambar');
    const imagePreview = document.getElementById('imagePreview');
    
    imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.innerHTML = `
                    <img src="${e.target.result}" 
                         alt="Preview" 
                         class="img-fluid rounded" 
                         style="max-width: 200px; max-height: 200px; object-fit: cover;">
                `;
            };
            reader.readAsDataURL(file);
        } else {
            imagePreview.innerHTML = `
                <div class="bg-light d-flex align-items-center justify-content-center" 
                     style="width: 200px; height: 200px; margin: 0 auto;">
                    <i class="fas fa-image fa-3x text-muted"></i>
                </div>
            `;
        }
    });

    // Icon preview
    const iconInput = document.getElementById('icon');
    const iconPreview = document.getElementById('iconPreview');
    
    iconInput.addEventListener('input', function() {
        const iconClass = this.value.trim();
        if (iconClass) {
            iconPreview.innerHTML = `<i class="${iconClass} fa-3x text-primary"></i>`;
        } else {
            iconPreview.innerHTML = `<i class="fas fa-question-circle fa-3x text-muted"></i>`;
        }
    });
});
</script>
@endsection
