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
        $existingVideo = Content::where('type', 'video')->first();
        
        if (!$existingVideo) {
            Content::create([
                'title' => 'Video Profil Dusun Ngelampengan',
                'content' => 'Tonton video profil lengkap Dusun Ngelampengan yang menampilkan keindahan alam, budaya, dan UMKM yang berkembang di wilayah Kapanewon Dlingo, Daerah Istimewa Yogyakarta.',
                'type' => 'video',
                'image' => 'content/video_thumbnail.jpg', // Admin bisa ganti gambar ini
                'video_url' => 'https://www.youtube.com/watch?v=example123', // Placeholder URL - replace with actual video
                'is_active' => true,
            ]);
        } else {
            $existingVideo->update([
                'title' => 'Video Profil Dusun Ngelampengan',
                'content' => 'Tonton video profil lengkap Dusun Ngelampengan yang menampilkan keindahan alam, budaya, dan UMKM yang berkembang di wilayah Kapanewon Dlingo, Daerah Istimewa Yogyakarta.',
                'image' => 'content/video_thumbnail.jpg', // Admin bisa ganti gambar ini
                'video_url' => 'https://www.youtube.com/watch?v=example123', // Placeholder URL - replace with actual video
                'is_active' => true,
            ]);
        }
    }
}
