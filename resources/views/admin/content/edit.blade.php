@extends('layouts.admin')

@section('title', 'Edit Video')
@section('subtitle', 'Edit video YouTube website')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h5 class="mb-0"><i class="fas fa-edit me-2"></i>Edit Video</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.content.update', $content->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Konten <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $content->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe Konten <span class="text-danger">*</span></label>
                            <input type="hidden" name="type" value="video">
                            <input type="text" class="form-control" value="Video" readonly>
                            <small class="text-muted">Otomatis diset ke tipe Video</small>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Deskripsi Video <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('content') is-invalid @enderror" 
                                      id="content" name="content" rows="4" required>{{ old('content', $content->content) }}</textarea>
                            <small class="text-muted">Deskripsi singkat tentang video yang akan ditampilkan</small>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            @if($content->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $content->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                    <small class="d-block text-muted">Gambar saat ini</small>
                                </div>
                            @endif
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                   id="image" name="image" accept="image/*">
                            <small class="text-muted">Format: JPG, PNG, GIF. Maksimal 2MB. Kosongkan jika tidak ingin mengubah gambar.</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="video_url" class="form-label">Link Video YouTube <span class="text-danger">*</span></label>
                            <input type="url" class="form-control @error('video_url') is-invalid @enderror" 
                                   id="video_url" name="video_url" value="{{ old('video_url', $content->video_url) }}" 
                                   placeholder="https://www.youtube.com/watch?v=..." required>
                            <small class="text-muted">Masukkan link video YouTube lengkap (wajib diisi)</small>
                            @error('video_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $content->is_active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Konten Aktif
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.content') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Kembali
                            </a>
                            <button type="submit" class="btn btn-admin">
                                <i class="fas fa-save me-2"></i>Update Video
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 