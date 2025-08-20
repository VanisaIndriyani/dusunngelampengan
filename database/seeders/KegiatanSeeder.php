<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama dulu
        Kegiatan::truncate();

        $kegiatan = [
            [
                'judul' => 'Senam Sehat Lansia',
                'deskripsi' => 'Kegiatan senam rutin untuk lansia setiap pagi di balai desa untuk menjaga kesehatan dan kebugaran tubuh.',
                'icon' => null,
                'gambar' => null,
                'status' => 'aktif',
                'urutan' => 1,
            ],
            [
                'judul' => 'Posyandu Balita',
                'deskripsi' => 'Pelayanan kesehatan terpadu untuk balita dan ibu hamil dengan pemeriksaan rutin dan pemberian vitamin.',
                'icon' => null,
                'gambar' => null,
                'status' => 'aktif',
                'urutan' => 2,
            ],
            [
                'judul' => 'PKK Desa',
                'deskripsi' => 'Kegiatan Pemberdayaan Kesejahteraan Keluarga untuk meningkatkan kualitas hidup keluarga desa.',
                'icon' => null,
                'gambar' => null,
                'status' => 'aktif',
                'urutan' => 3,
            ],
            [
                'judul' => 'Gotong Royong',
                'deskripsi' => 'Kegiatan kerja bakti membersihkan lingkungan desa dan memperbaiki infrastruktur secara bersama-sama.',
                'icon' => null,
                'gambar' => null,
                'status' => 'aktif',
                'urutan' => 4,
            ],
            [
                'judul' => 'Pengajian Rutin',
                'deskripsi' => 'Kegiatan keagamaan mingguan untuk mempererat tali silaturahmi dan meningkatkan iman warga desa.',
                'icon' => null,
                'gambar' => null,
                'status' => 'aktif',
                'urutan' => 5,
            ],
            [
                'judul' => 'Pelatihan UMKM',
                'deskripsi' => 'Program pelatihan untuk meningkatkan keterampilan warga dalam mengelola usaha mikro kecil menengah.',
                'icon' => null,
                'gambar' => null,
                'status' => 'aktif',
                'urutan' => 6,
            ],
            [
                'judul' => 'Karang Taruna',
                'deskripsi' => 'Organisasi kepemudaan yang aktif dalam berbagai kegiatan sosial dan pembangunan desa.',
                'icon' => null,
                'gambar' => null,
                'status' => 'aktif',
                'urutan' => 7,
            ],
            [
                'judul' => 'Bank Sampah',
                'deskripsi' => 'Program pengelolaan sampah organik dan anorganik untuk menjaga kebersihan dan menghasilkan nilai ekonomi.',
                'icon' => null,
                'gambar' => null,
                'status' => 'aktif',
                'urutan' => 8,
            ],
        ];

        foreach ($kegiatan as $item) {
            Kegiatan::create($item);
        }

        $this->command->info('Kegiatan berhasil di-seed!');
    }
}
