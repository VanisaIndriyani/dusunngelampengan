@extends('layouts.admin')

@section('title', 'Detail Kegiatan - Admin Panel')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Detail Kegiatan</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Kembali
                    </a>
                    <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}" class="btn btn-warning">
                        <i class="fas fa-edit me-2"></i>Edit
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informasi Kegiatan</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Judul Kegiatan</label>
                                <p class="form-control-plaintext">{{ $kegiatan->judul }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Status</label>
                                <div>
                                    @if($kegiatan->status == 'aktif')
                                        <span class="badge bg-success fs-6">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary fs-6">Nonaktif</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Icon</label>
                                <div>
                                    @if($kegiatan->icon)
                                        <i class="{{ $kegiatan->icon }} fa-3x text-primary"></i>
                                        <p class="text-muted mt-2">{{ $kegiatan->icon }}</p>
                                    @else
                                        <span class="text-muted">Tidak ada icon</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Urutan Tampilan</label>
                                <p class="form-control-plaintext">
                                    <span class="badge bg-primary fs-6">{{ $kegiatan->urutan }}</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi</label>
                        <div class="form-control-plaintext" style="min-height: 100px;">
                            {{ $kegiatan->deskripsi }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Dibuat Pada</label>
                                <p class="form-control-plaintext">
                                    {{ $kegiatan->created_at->format('d F Y H:i') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Terakhir Diupdate</label>
                                <p class="form-control-plaintext">
                                    {{ $kegiatan->updated_at->format('d F Y H:i') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Gambar Kegiatan</h5>
                </div>
                <div class="card-body text-center">
                    @if($kegiatan->gambar)
                        <img src="{{ asset('storage/kegiatan/' . $kegiatan->gambar) }}" 
                             alt="{{ $kegiatan->judul }}" 
                             class="img-fluid rounded" 
                             style="max-width: 100%; height: auto;">
                        <div class="mt-3">
                            <small class="text-muted">
                                Nama file: {{ $kegiatan->gambar }}
                            </small>
                        </div>
                    @else
                        <div class="bg-light d-flex align-items-center justify-content-center" 
                             style="width: 200px; height: 200px; margin: 0 auto;">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                        <p class="text-muted mt-2">Tidak ada gambar</p>
                    @endif
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Aksi Cepat</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}" 
                           class="btn btn-warning">
                            <i class="fas fa-edit me-2"></i>Edit Kegiatan
                        </a>
                        
                        @if($kegiatan->status == 'aktif')
                            <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" 
                                  method="POST" 
                                  class="d-grid">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="nonaktif">
                                <button type="submit" 
                                        class="btn btn-secondary"
                                        onclick="return confirm('Apakah Anda yakin ingin menonaktifkan kegiatan ini?')">
                                    <i class="fas fa-pause me-2"></i>Nonaktifkan
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" 
                                  method="POST" 
                                  class="d-grid">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="aktif">
                                <button type="submit" 
                                        class="btn btn-success"
                                        onclick="return confirm('Apakah Anda yakin ingin mengaktifkan kegiatan ini?')">
                                    <i class="fas fa-play me-2"></i>Aktifkan
                                </button>
                            </form>
                        @endif
                        
                        <form action="{{ route('admin.kegiatan.destroy', $kegiatan->id) }}" 
                              method="POST" 
                              class="d-grid"
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash me-2"></i>Hapus Kegiatan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
