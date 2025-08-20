@extends('layouts.admin')

@section('title', 'Dashboard')
@section('subtitle', 'Ringkasan data website Dusun Nglampengan')

@section('content')
<div class="container-fluid">
    <div class="row g-3">
    <!-- Statistics Cards -->
    <div class="col-6 col-md-4">
        <div class="stats-card">
            <i class="fas fa-users fa-lg fa-2x mb-3"></i>
            <h3 class="stats-number mb-2">{{ $stats['total_users'] }}</h3>
            <p class="mb-0">Total Pengguna</p>
        </div>
    </div>
    
    <div class="col-6 col-md-4">
        <div class="stats-card">
            <i class="fas fa-store fa-lg fa-2x mb-3"></i>
            <h3 class="stats-number mb-2">{{ $stats['total_umkm'] }}</h3>
            <p class="mb-0">Total UMKM</p>
        </div>
    </div>
    
    <div class="col-6 col-md-4">
        <div class="stats-card">
            <i class="fas fa-file-alt fa-lg fa-2x mb-3"></i>
            <h3 class="stats-number mb-2">{{ $stats['total_content'] }}</h3>
            <p class="mb-0">Total Konten</p>
        </div>
    </div>
    




    <!-- Recent UMKM -->
    <div class="col-lg-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5 class="mb-0"><i class="fas fa-store me-2"></i>UMKM Terbaru</h5>
            </div>
            <div class="card-body">
                @if($recent_umkm->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama UMKM</th>
                                    <th class="d-none d-md-table-cell">Kategori</th>
                                    <th class="d-none d-lg-table-cell">Pemilik</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recent_umkm as $umkm)
                                <tr>
                                    <td>
                                        <div>
                                            <strong>{{ $umkm->name }}</strong>
                                            <br>
                                            <small class="text-muted d-md-none">{{ $umkm->category }}</small>
                                        </div>
                                    </td>
                                    <td class="d-none d-md-table-cell"><span class="badge bg-success">{{ $umkm->category }}</span></td>
                                    <td class="d-none d-lg-table-cell">{{ $umkm->owner_name }}</td>
                                    <td>
                                        <a href="{{ route('admin.umkm.edit', $umkm->id) }}" class="btn btn-sm btn-outline-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-3">
                        <i class="fas fa-store fa-2x text-muted mb-2"></i>
                        <p class="text-muted mb-2">Belum ada UMKM</p>
                        <a href="{{ route('admin.umkm.create') }}" class="btn btn-sm btn-admin">
                            <i class="fas fa-plus me-1"></i>Tambah UMKM
                        </a>
                    </div>
                @endif
                
                @if($recent_umkm->count() > 0)
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.umkm.index') }}" class="btn btn-admin">
                            <i class="fas fa-eye me-2"></i>Lihat Semua UMKM
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

        <!-- User Activity Section -->
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5 class="mb-0"><i class="fas fa-user-clock me-2"></i>Aktivitas Terbaru - {{ Auth::user()->name }}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-primary mb-3"><i class="fas fa-info-circle me-2"></i>Informasi Akun</h6>
                        <div class="d-flex align-items-center mb-3">
                            <div class="user-avatar me-3">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <div>
                                <strong>{{ Auth::user()->name }}</strong>
                                <br>
                                <span class="badge bg-primary">{{ ucfirst(Auth::user()->role) }}</span>
                                <br>
                                <small class="text-muted">{{ Auth::user()->email }}</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>
                                Bergabung sejak: {{ Auth::user()->created_at->format('d/m/Y H:i') }}
                            </small>
                        </div>
                        <div class="mb-3">
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>
                                Login terakhir: {{ Auth::user()->updated_at->format('d/m/Y H:i') }}
                            </small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-success mb-3"><i class="fas fa-chart-line me-2"></i>Statistik Aktivitas</h6>
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="text-center p-3 bg-light rounded">
                                    <div class="h4 text-primary mb-1">{{ $stats['total_umkm'] }}</div>
                                    <small class="text-muted">UMKM Dikelola</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center p-3 bg-light rounded">
                                    <div class="h4 text-success mb-1">{{ $stats['total_content'] }}</div>
                                    <small class="text-muted">Konten Dibuat</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5 class="mb-0"><i class="fas fa-bolt me-2"></i>Aksi Cepat</h5>
            </div>
            <div class="card-body p-3">
                <div class="row g-2">

                    <div class="col-6 col-md-4">
                        <a href="{{ route('admin.umkm.create') }}" class="btn btn-admin w-100 py-2">
                            <i class="fas fa-plus me-1"></i><span class="d-none d-sm-inline">Tambah UMKM</span><span class="d-sm-none">UMKM</span>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="{{ route('admin.content.create') }}" class="btn btn-admin w-100 py-2">
                            <i class="fas fa-plus me-1"></i><span class="d-none d-sm-inline">Tambah Konten</span><span class="d-sm-none">Konten</span>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="{{ route('admin.settings') }}" class="btn btn-admin w-100 py-2">
                            <i class="fas fa-cog me-1"></i><span class="d-none d-sm-inline">Pengaturan</span><span class="d-sm-none">Setting</span>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-admin w-100 py-2">
                            <i class="fas fa-users me-1"></i><span class="d-none d-sm-inline">Data User</span><span class="d-sm-none">User</span>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-admin w-100 py-2">
                            <i class="fas fa-plus me-1"></i><span class="d-none d-sm-inline">Tambah Kegiatan</span><span class="d-sm-none">Kegiatan</span>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-admin w-100 py-2">
                            <i class="fas fa-tasks me-1"></i><span class="d-none d-sm-inline">Kelola Kegiatan</span><span class="d-sm-none">Kegiatan</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection 