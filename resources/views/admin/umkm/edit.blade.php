@extends('layouts.admin')

@section('title', 'Edit UMKM')
@section('subtitle', 'Edit data UMKM')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5 class="mb-0"><i class="fas fa-edit me-2"></i>Edit UMKM: {{ $umkm->name }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.umkm.update', $umkm->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama UMKM <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name', $umkm->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" name="description" rows="4" required>{{ old('description', $umkm->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Kategori <span class="text-danger">*</span></label>
                                        <select class="form-select @error('category') is-invalid @enderror" 
                                                id="category" name="category" required>
                                            <option value="">Pilih Kategori</option>
                                                                                         <option value="kayu" {{ old('category', $umkm->category) == 'kayu' ? 'selected' : '' }}>Kayu</option>
                                             <option value="makanan" {{ old('category', $umkm->category) == 'makanan' ? 'selected' : '' }}>Makanan</option>
                                             <option value="kerajinan" {{ old('category', $umkm->category) == 'kerajinan' ? 'selected' : '' }}>Kerajinan</option>
                                             <option value="jasa" {{ old('category', $umkm->category) == 'jasa' ? 'selected' : '' }}>Jasa</option>
                                             <option value="lainnya" {{ old('category', $umkm->category) == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                                        </select>
                                        @error('category')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat <span class="text-danger">*</span></label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" 
                                                  id="address" name="address" rows="3" required>{{ old('address', $umkm->address) }}</textarea>
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar UMKM</label>
                                <div class="border rounded p-3 text-center">
                                    @if($umkm->image)
                                        <div class="mb-3">
                                            <img src="{{ asset('storage/' . $umkm->image) }}" alt="Current Image" 
                                                 class="img-fluid rounded" style="max-height: 200px;">
                                            <p class="text-muted mt-2">Gambar saat ini</p>
                                        </div>
                                    @endif
                                    <div id="imagePreview" class="mb-3" style="display: none;">
                                        <img id="preview" src="" alt="Preview" 
                                             class="img-fluid rounded" style="max-height: 200px;">
                                        <p class="text-muted mt-2">Preview gambar baru</p>
                                    </div>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                           id="image" name="image" accept="image/*" onchange="previewImage(this)">
                                    <small class="text-muted">Format: JPG, PNG, GIF. Maks: 2MB</small>
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <h6 class="mb-3">Informasi Pemilik</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="owner_name" class="form-label">Nama Pemilik <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('owner_name') is-invalid @enderror" 
                                       id="owner_name" name="owner_name" value="{{ old('owner_name', $umkm->owner_name) }}" required>
                                @error('owner_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="owner_phone" class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('owner_phone') is-invalid @enderror" 
                                       id="owner_phone" name="owner_phone" value="{{ old('owner_phone', $umkm->owner_phone) }}" required>
                                @error('owner_phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.umkm.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-admin">
                            <i class="fas fa-save me-2"></i>Update UMKM
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function previewImage(input) {
    const preview = document.getElementById('preview');
    const imagePreview = document.getElementById('imagePreview');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            imagePreview.style.display = 'block';
        }
        
        reader.readAsDataURL(input.files[0]);
    } else {
        imagePreview.style.display = 'none';
    }
}
</script>
@endpush 