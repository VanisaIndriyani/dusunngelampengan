@extends('layouts.admin')

@section('title', 'Manajemen Video')
@section('subtitle', 'Kelola video YouTube website Dusun Nglampengan')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h5 class="mb-1">Daftar Video</h5>
            <small class="text-muted">Kelola video YouTube website</small>
        </div>
      
    </div>

    <div class="admin-card">
        <div class="card-body">
            @if($contents->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover table-admin">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Judul</th>
                                <th style="width: 15%;">Video URL</th>
                                <th style="width: 15%;">Status</th>
                                <th style="width: 20%;">Tanggal Dibuat</th>
                                <th style="width: 10%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contents as $content)
                            <tr>
                                <td>
                                    <div>
                                        <strong class="text-dark">{{ $content->title }}</strong>
                                        <br>
                                        <small class="text-muted">{{ Str::limit($content->content, 80) }}</small>
                                        @if($content->video_url)
                                            <br>
                                            <small class="text-info">
                                                <i class="fas fa-video me-1"></i>Video YouTube
                                            </small>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    @if($content->video_url)
                                        <a href="{{ $content->video_url }}" target="_blank" class="text-decoration-none">
                                            <small class="text-info">
                                                <i class="fas fa-video me-1"></i>Lihat Video
                                            </small>
                                        </a>
                                    @else
                                        <small class="text-muted">Tidak ada video</small>
                                    @endif
                                </td>
                                <td>
                                    @if($content->is_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <small class="text-muted">{{ $content->created_at->format('d/m/Y H:i') }}</small>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('admin.content.edit', $content->id) }}" class="btn btn-outline-primary" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.content.destroy', $content->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus video ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" title="Hapus">
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

                @if($contents->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $contents->links('pagination::bootstrap-5') }}
                    </div>
                @endif
            @else
                <div class="text-center py-4">
                    <i class="fas fa-video fa-2x text-muted mb-2"></i>
                    <h6 class="text-muted mb-2">Belum ada video</h6>
                    <p class="text-muted mb-3">Mulai dengan menambahkan video pertama</p>
                    <a href="{{ route('admin.content.create') }}" class="btn btn-admin btn-sm">
                        <i class="fas fa-plus me-1"></i>Tambah Video Pertama
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 