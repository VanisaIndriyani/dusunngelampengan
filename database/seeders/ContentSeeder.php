<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'title' => 'Selamat Datang di Dusun Ngelampengan',
                'content' => 'Dusun Ngelampengan adalah pusat kerajinan kayu terkemuka di Jawa Timur. Kami mengkhususkan diri dalam pembuatan furniture kayu berkualitas tinggi dengan desain tradisional dan modern.',
                'type' => 'hero',
                'image' => 'contents/hero-welcome.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Tentang Dusun Ngelampengan',
                'content' => 'Dusun Ngelampengan telah menjadi pusat kerajinan kayu sejak puluhan tahun yang lalu. Dengan pengalaman dan keahlian yang diturunkan dari generasi ke generasi, kami menghasilkan furniture kayu berkualitas tinggi yang tidak hanya indah tetapi juga tahan lama. Setiap produk yang kami buat mencerminkan dedikasi dan passion kami terhadap kerajinan kayu tradisional.',
                'type' => 'about',
                'image' => 'contents/about-dusun.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Keunggulan Produk Kami',
                'content' => 'Produk kami terbuat dari kayu pilihan seperti jati, mahoni, dan sonokeling yang terkenal dengan kualitas dan keawetannya. Setiap tahap pembuatan dilakukan dengan teliti, mulai dari pemilihan kayu, pengeringan, hingga finishing. Kami menggunakan teknik tradisional yang dikombinasikan dengan teknologi modern untuk menghasilkan furniture yang sempurna.',
                'type' => 'features',
                'image' => 'contents/features-quality.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Jenis Kayu yang Kami Gunakan',
                'content' => 'Kami menggunakan berbagai jenis kayu berkualitas tinggi:\n\n• Kayu Jati: Terkenal dengan kekuatan dan keawetannya, cocok untuk furniture outdoor dan indoor\n• Kayu Mahoni: Memiliki tekstur yang halus dan warna yang indah, ideal untuk furniture dalam ruangan\n• Kayu Sonokeling: Keras dan tahan lama, sering digunakan untuk furniture yang membutuhkan ketahanan tinggi',
                'type' => 'materials',
                'image' => 'contents/materials-wood.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Proses Pembuatan',
                'content' => 'Proses pembuatan furniture kami meliputi:\n\n1. Pemilihan Kayu: Memilih kayu berkualitas tinggi\n2. Pengeringan: Mengeringkan kayu secara alami\n3. Perancangan: Merancang desain sesuai kebutuhan\n4. Pembuatan: Menggunakan teknik tradisional dan modern\n5. Finishing: Memberikan finishing yang sempurna\n6. Quality Control: Memastikan kualitas produk',
                'type' => 'process',
                'image' => 'contents/process-making.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Hubungi Kami',
                'content' => 'Untuk informasi lebih lanjut tentang produk kami atau pemesanan, silakan hubungi kami:\n\n📞 Telepon: +62 812-3456-7890\n📧 Email: info@dusunnglampengan.com\n📍 Alamat: Dusun Ngelampengan, Kecamatan Malang, Jawa Timur\n\nKami siap melayani Anda dengan sepenuh hati.',
                'type' => 'contact',
                'image' => 'contents/contact-info.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Testimoni Pelanggan',
                'content' => '"Produk furniture dari Dusun Ngelampengan sangat berkualitas. Saya sudah menggunakan meja makan dari sini selama 5 tahun dan masih terlihat seperti baru. Pelayanan juga sangat ramah dan profesional." - Pak Ahmad, Jakarta\n\n"Kursi tamu yang saya beli dari sini sangat nyaman dan awet. Desainnya juga elegan dan cocok dengan interior rumah saya." - Bu Sari, Surabaya',
                'type' => 'testimonials',
                'image' => 'contents/testimonials.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Galeri Produk',
                'content' => 'Lihat koleksi produk terbaik kami yang telah dipilih dengan teliti untuk memenuhi kebutuhan Anda. Setiap produk mencerminkan keahlian dan dedikasi para pengrajin kami.',
                'type' => 'gallery',
                'image' => 'contents/gallery-products.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($contents as $content) {
            Content::create($content);
        }
    }
}
