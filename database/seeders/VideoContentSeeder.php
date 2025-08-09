<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;

class VideoContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::create([
            'title' => 'Video Profil Dusun Ngelampengan',
            'content' => 'Tonton video profil lengkap Dusun Ngelampengan yang menampilkan keindahan alam, budaya, dan UMKM yang berkembang di wilayah Kapanewon Dlingo, Daerah Istimewa Yogyakarta.',
            'type' => 'video',
            'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'is_active' => true,
        ]);
    }
}
