<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UMKM;

class UMKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $umkm = [
            [
                'name' => 'Tukang Kayu Jaya',
                'description' => 'Bengkel kayu tradisional yang mengkhususkan diri dalam pembuatan furniture kayu jati dan mahoni. Berpengalaman lebih dari 20 tahun dalam kerajinan kayu.',
                'category' => 'kayu',
                'image' => 'umkm/tukang-kayu-jaya.jpg',
                'owner_name' => 'Pak Suroto',
                'owner_phone' => '0812-3456-7890',
                'address' => 'Jl. Raya Ngelampengan No. 15, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Furniture Mahoni Indah',
                'description' => 'UMKM yang fokus pada pembuatan furniture dari kayu mahoni berkualitas tinggi. Menghasilkan produk dengan desain modern dan klasik.',
                'category' => 'kayu',
                'image' => 'umkm/furniture-mahoni-indah.jpg',
                'owner_name' => 'Bu Siti',
                'owner_phone' => '0813-4567-8901',
                'address' => 'Jl. Kayu Jati No. 8, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Bengkel Kayu Hadi',
                'description' => 'Bengkel kayu yang mengkhususkan diri dalam pembuatan lemari dan tempat tidur. Menggunakan kayu jati pilihan dengan finishing berkualitas.',
                'category' => 'kayu',
                'image' => 'umkm/bengkel-kayu-hadi.jpg',
                'owner_name' => 'Pak Hadi',
                'owner_phone' => '0814-5678-9012',
                'address' => 'Jl. Kerajinan No. 22, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Rak Buku Rina',
                'description' => 'UMKM yang fokus pada pembuatan rak buku dan rak penyimpanan dari kayu sonokeling. Desain minimalis dan fungsional.',
                'category' => 'kayu',
                'image' => 'umkm/rak-buku-rina.jpg',
                'owner_name' => 'Bu Rina',
                'owner_phone' => '0815-6789-0123',
                'address' => 'Jl. Kayu Sonokeling No. 12, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Tempat Tidur Joko',
                'description' => 'Bengkel kayu yang mengkhususkan diri dalam pembuatan tempat tidur dan furniture kamar tidur. Menggunakan kayu jati berkualitas premium.',
                'category' => 'kayu',
                'image' => 'umkm/tempat-tidur-joko.jpg',
                'owner_name' => 'Pak Joko',
                'owner_phone' => '0816-7890-1234',
                'address' => 'Jl. Furniture No. 18, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Meja Kerja Yanti',
                'description' => 'UMKM yang fokus pada pembuatan meja kerja dan furniture kantor dari kayu mahoni. Desain ergonomis dan modern.',
                'category' => 'kayu',
                'image' => 'umkm/meja-kerja-yanti.jpg',
                'owner_name' => 'Bu Yanti',
                'owner_phone' => '0817-8901-2345',
                'address' => 'Jl. Kayu Mahoni No. 25, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Kursi Makan Bambang',
                'description' => 'Bengkel kayu yang mengkhususkan diri dalam pembuatan kursi makan dan set meja makan. Menggunakan kayu jati dengan finishing glossy.',
                'category' => 'kayu',
                'image' => 'umkm/kursi-makan-bambang.jpg',
                'owner_name' => 'Pak Bambang',
                'owner_phone' => '0818-9012-3456',
                'address' => 'Jl. Kayu Jati No. 30, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Lemari Hias Sri',
                'description' => 'UMKM yang fokus pada pembuatan lemari hias dan furniture dekoratif dari kayu sonokeling. Dilengkapi dengan ukiran tradisional.',
                'category' => 'kayu',
                'image' => 'umkm/lemari-hias-sri.jpg',
                'owner_name' => 'Bu Sri',
                'owner_phone' => '0819-0123-4567',
                'address' => 'Jl. Ukiran No. 14, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Warung Makan Bu Sari',
                'description' => 'Warung makan tradisional yang menyajikan masakan khas Yogyakarta. Spesialis gudeg, sate klathak, dan berbagai masakan rumahan.',
                'category' => 'makanan',
                'image' => 'umkm/warung-makan-bu-sari.jpg',
                'owner_name' => 'Bu Sari',
                'owner_phone' => '0820-1234-5678',
                'address' => 'Jl. Raya Ngelampengan No. 5, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Kerajinan Batik Nusantara',
                'description' => 'UMKM yang mengkhususkan diri dalam pembuatan batik tulis dan cap. Menggunakan motif-motif tradisional Yogyakarta.',
                'category' => 'kerajinan',
                'image' => 'umkm/kerajinan-batik-nusantara.jpg',
                'owner_name' => 'Bu Dewi',
                'owner_phone' => '0821-2345-6789',
                'address' => 'Jl. Batik No. 10, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Bengkel Motor Jaya',
                'description' => 'Bengkel motor yang menyediakan layanan service dan spare parts. Berpengalaman dalam perbaikan berbagai jenis motor.',
                'category' => 'jasa',
                'image' => 'umkm/bengkel-motor-jaya.jpg',
                'owner_name' => 'Pak Jaya',
                'owner_phone' => '0822-3456-7890',
                'address' => 'Jl. Raya Ngelampengan No. 25, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
            [
                'name' => 'Toko Kelontong Makmur',
                'description' => 'Toko kelontong yang menyediakan berbagai kebutuhan sehari-hari. Buka dari pagi hingga malam.',
                'category' => 'lainnya',
                'image' => 'umkm/toko-kelontong-makmur.jpg',
                'owner_name' => 'Pak Makmur',
                'owner_phone' => '0823-4567-8901',
                'address' => 'Jl. Raya Ngelampengan No. 8, Dusun Ngelampengan, Kapanewon Dlingo, Bantul, DIY',
                'is_active' => true,
            ],
        ];

        foreach ($umkm as $business) {
            UMKM::create($business);
        }
    }
}
