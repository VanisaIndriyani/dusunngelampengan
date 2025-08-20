@extends('layouts.admin')

@section('title', 'Kelola Kegiatan - Admin Panel')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Kelola Kegiatan</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Tambah Kegiatan
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="kegiatanTable">
                            <thead class="table-light">
                                <tr>
                                    <th width="50">No</th>
                                    <th width="80">Urutan</th>
                                    <th width="100">Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>

                                    <th width="100">Status</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="sortableKegiatan">
                                @forelse($kegiatan as $index => $item)
                                <tr data-id="{{ $item->id }}">
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <span class="badge bg-secondary">{{ $item->urutan }}</span>
                                    </td>
                                    <td>
                                        @if($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" 
                                                 alt="{{ $item->judul }}" 
                                                 class="img-thumbnail" 
                                                 style="width: 60px; height: 60px; object-fit: cover;">
                                        @else
                                            <div class="bg-light d-flex align-items-center justify-content-center" 
                                                 style="width: 60px; height: 60px;">
                                                <i class="fas fa-image text-muted"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{ $item->judul }}</strong>
                                    </td>
                                    <td>
                                        {{ Str::limit($item->deskripsi, 100) }}
                                    </td>

                                    <td>
                                        @if($item->status == 'aktif')
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-secondary">Nonaktif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.kegiatan.show', $item->id) }}" 
                                               class="btn btn-sm btn-info" 
                                               title="Lihat">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.kegiatan.edit', $item->id) }}" 
                                               class="btn btn-sm btn-warning" 
                                               title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.kegiatan.destroy', $item->id) }}" 
                                                  method="POST" 
                                                  class="d-inline"
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-sm btn-danger" 
                                                        title="Hapus">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center py-4">
                                        <div class="text-muted">
                                            <i class="fas fa-inbox fa-3x mb-3"></i>
                                            <p>Belum ada kegiatan yang ditambahkan</p>
                                            <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-primary">
                                                <i class="fas fa-plus me-2"></i>Tambah Kegiatan Pertama
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drag & Drop Sortable Script -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tbody = document.getElementById('sortableKegiatan');
    
    if (tbody) {
        new Sortable(tbody, {
            animation: 150,
            ghostClass: 'sortable-ghost',
            chosenClass: 'sortable-chosen',
            dragClass: 'sortable-drag',
            onEnd: function(evt) {
                const rows = Array.from(tbody.querySelectorAll('tr[data-id]'));
                const urutan = rows.map(row => row.dataset.id);
                
                // Update urutan via AJAX
                fetch('{{ route("admin.kegiatan.update-urutan") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ urutan: urutan })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update urutan numbers
                        rows.forEach((row, index) => {
                            const urutanCell = row.querySelector('td:nth-child(2) .badge');
                            if (urutanCell) {
                                urutanCell.textContent = index + 1;
                            }
                        });
                        
                        // Show success message
                        const alert = document.createElement('div');
                        alert.className = 'alert alert-success alert-dismissible fade show';
                        alert.innerHTML = `
                            Urutan kegiatan berhasil diperbarui!
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        `;
                        
                        const container = document.querySelector('.container-fluid');
                        container.insertBefore(alert, container.firstChild);
                        
                        // Auto remove alert after 3 seconds
                        setTimeout(() => {
                            alert.remove();
                        }, 3000);
                    }
                })
                .catch(error => {
                    console.error('Error updating urutan:', error);
                });
            }
        });
    }
});
</script>

<style>
.sortable-ghost {
    opacity: 0.5;
    background: #f8f9fa !important;
}

.sortable-chosen {
    background: #e3f2fd !important;
}

.sortable-drag {
    background: #fff !important;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

#sortableKegiatan tr {
    cursor: move;
}

#sortableKegiatan tr:hover {
    background-color: #f8f9fa;
}
</style>
@endsection
