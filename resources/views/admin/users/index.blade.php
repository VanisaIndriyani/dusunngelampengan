@extends('layouts.admin')

@section('title', 'Data User')
@section('subtitle', 'Kelola semua user admin')

@section('content')
<div class="container-fluid">
    <!-- Search and Filter -->
    <div class="row mb-3">
        <div class="col-md-8">
            <form action="{{ route('admin.users.index') }}" method="GET" class="d-flex gap-2">
                <input type="text" name="search" class="form-control" placeholder="Cari nama atau email..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-admin">
                    <i class="fas fa-search me-1"></i>Cari
                </button>
                @if(request('search'))
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-times me-1"></i>Reset
                    </a>
                @endif
            </form>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('admin.users.create') }}" class="btn btn-admin">
                <i class="fas fa-plus me-2"></i>Tambah User
            </a>
        </div>
    </div>

    <!-- Users Table -->
    <div class="admin-card">
        <div class="admin-card-header">
            <h5 class="mb-0"><i class="fas fa-users me-2"></i>Daftar User</h5>
        </div>
        <div class="card-body">
            @if($users->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="user-avatar me-3">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <strong>{{ $user->name }}</strong>
                                            @if($user->id === auth()->id())
                                                <span class="badge bg-info ms-2">Anda</span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <span class="badge bg-success">Aktif</span>
                                </td>
                                <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @if($user->id !== auth()->id())
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination-container">
                    <div class="pagination-info">
                        <i class="fas fa-info-circle me-2"></i>
                        Menampilkan {{ $users->firstItem() ?? 0 }} - {{ $users->lastItem() ?? 0 }} dari {{ $users->total() }} user
                    </div>
                    <div class="pagination-nav">
                        {{ $users->appends(request()->query())->links() }}
                    </div>
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-users fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">Belum ada user</h5>
                    <p class="text-muted mb-3">Mulai dengan menambahkan user admin atau RT pertama</p>
                    <a href="{{ route('admin.users.create') }}" class="btn btn-admin">
                        <i class="fas fa-plus me-2"></i>Tambah User Pertama
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
.user-avatar {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 1.1rem;
}

.badge {
    font-size: 0.75rem;
    padding: 0.5rem 0.75rem;
}
</style>
@endsection
