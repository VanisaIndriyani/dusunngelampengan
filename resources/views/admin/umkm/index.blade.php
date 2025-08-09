@extends('layouts.admin')

@section('title', 'Manajemen UMKM')
@section('subtitle', 'Kelola data UMKM Dusun Ngelampengan')

@push('styles')
<style>
    .search-form {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        margin-bottom: 1rem;
    }
    
    .search-form .form-control,
    .search-form .form-select {
        border: 1px solid #dee2e6;
        border-radius: 6px;
    }
    
    .search-form .form-control:focus,
    .search-form .form-select:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25);
    }
    
    .search-results-info {
        background: linear-gradient(135deg, #e3f2fd, #f3e5f5);
        border-left: 4px solid #2563eb;
    }
    
    .search-results-info .badge {
        font-size: 0.8rem;
    }
    
    .btn-search {
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border: none;
        color: white;
        transition: all 0.3s ease;
    }
    
    .btn-search:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(37, 99, 235, 0.3);
    }
    
    .btn-reset {
        border: 1px solid #6c757d;
        color: #6c757d;
        transition: all 0.3s ease;
    }
    
    .btn-reset:hover {
        background: #6c757d;
        color: white;
    }
    
    /* Pagination Styling */
    .pagination-info {
        font-size: 14px;
        color: #555;
        display: flex;
        align-items: center;
    }
    
    .pagination-nav {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
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
</style>
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="fas fa-store me-2"></i>Daftar UMKM</h5>
                <a href="{{ route('admin.umkm.create') }}" class="btn btn-light">
                    <i class="fas fa-plus me-2"></i>Tambah UMKM
                </a>
            </div>
            
            <!-- Search and Filter Section -->
            <div class="card-body border-bottom search-form">
                <form method="GET" action="{{ route('admin.umkm.index') }}" class="row g-3">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" class="form-control" name="search" 
                                   placeholder="Cari nama UMKM atau pemilik..." 
                                   value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="category">
                            <option value="">Semua Kategori</option>
                            <option value="kayu" {{ request('category') == 'kayu' ? 'selected' : '' }}>Kayu</option>
                            <option value="makanan" {{ request('category') == 'makanan' ? 'selected' : '' }}>Makanan</option>
                            <option value="kerajinan" {{ request('category') == 'kerajinan' ? 'selected' : '' }}>Kerajinan</option>
                            <option value="jasa" {{ request('category') == 'jasa' ? 'selected' : '' }}>Jasa</option>
                            <option value="lainnya" {{ request('category') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="status">
                            <option value="">Semua Status</option>
                            <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-search">
                                <i class="fas fa-search me-1"></i>Cari
                            </button>
                            @if(request('search') || request('category') || request('status'))
                                <a href="{{ route('admin.umkm.index') }}" class="btn btn-reset">
                                    <i class="fas fa-times me-1"></i>Reset
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <!-- Search Results Info -->
                @if(request('search') || request('category') || request('status'))
                    <div class="alert alert-info mb-3 search-results-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Hasil Pencarian:</strong>
                        @if(request('search'))
                            <span class="badge bg-primary me-2">Pencarian: "{{ request('search') }}"</span>
                        @endif
                        @if(request('category'))
                            <span class="badge bg-success me-2">Kategori: {{ ucfirst(request('category')) }}</span>
                        @endif
                        @if(request('status'))
                            <span class="badge bg-warning me-2">Status: {{ request('status') == '1' ? 'Aktif' : 'Nonaktif' }}</span>
                        @endif
                        <span class="text-muted">({{ $umkm->total() }} hasil ditemukan)</span>
                    </div>
                @endif

                @if($umkm->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-admin table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama UMKM</th>
                                    <th>Kategori</th>
                                    <th>Pemilik</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($umkm as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if($item->image)
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" 
                                                 class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                        @else
                                            <div class="bg-secondary rounded d-flex align-items-center justify-content-center" 
                                                 style="width: 50px; height: 50px;">
                                                <i class="fas fa-store text-white"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{ $item->name }}</strong>
                                        <br>
                                        <small class="text-muted">{{ Str::limit($item->description, 50) }}</small>
                                    </td>
                                    <td><span class="badge bg-success">{{ $item->category }}</span></td>
                                    <td>
                                        <div>
                                            <strong>{{ $item->owner_name }}</strong>
                                            <br>
                                            <small class="text-muted">{{ $item->owner_phone }}</small>
                                        </div>
                                    </td>
                                    <td>
                                        <small class="text-muted">{{ Str::limit($item->address, 50) }}</small>
                                    </td>
                                    <td>
                                        @if($item->is_active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Nonaktif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.umkm.edit', $item->id) }}" 
                                               class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.umkm.destroy', $item->id) }}" 
                                                  method="POST" class="d-inline" 
                                                  onsubmit="return confirm('Yakin ingin menghapus UMKM ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    @if($umkm->hasPages())
                        <div class="d-flex justify-content-between align-items-center flex-wrap mt-3">
                            <div class="pagination-info">
                                <i class="fas fa-info-circle me-1"></i>
                                Menampilkan {{ $umkm->firstItem() ?? 0 }} sampai {{ $umkm->lastItem() ?? 0 }} dari {{ $umkm->total() }} data
                            </div>
                            <div class="pagination-nav">
                                {{ $umkm->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    @endif
                @else
                    <div class="text-center py-5">
                        <i class="fas fa-store fa-4x text-muted mb-3"></i>
                        <h5 class="text-muted">Belum ada UMKM</h5>
                        <p class="text-muted">Mulai dengan menambahkan UMKM pertama</p>
                        <a href="{{ route('admin.umkm.create') }}" class="btn btn-admin">
                            <i class="fas fa-plus me-2"></i>Tambah UMKM Pertama
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection 