<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    
    protected $fillable = [
        'judul',
        'deskripsi',
        'icon',
        'gambar',
        'status',
        'urutan'
    ];

    protected $casts = [
        'status' => 'string',
        'urutan' => 'integer'
    ];

    public function scopeAktif($query)
    {
        return $query->where('status', 'aktif');
    }

    public function scopeUrut($query)
    {
        return $query->orderBy('urutan', 'asc');
    }
}
