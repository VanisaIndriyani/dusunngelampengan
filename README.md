# Website Dusun Ngelampengan

Website resmi Dusun Ngelampengan yang menampilkan informasi tentang UMKM, produk kayu, dan potensi desa dengan tema hijau-putih yang responsif.

## 🎯 Deskripsi

Website ini dibuat sebagai proyek KKN untuk mempromosikan Dusun Ngelampengan, khususnya dalam bidang:
- UMKM lokal
- Produk kayu berkualitas
- Potensi wisata desa
- Kerajinan tangan tradisional

## ✨ Fitur

### 🏠 Halaman Beranda
- Hero section dengan call-to-action
- Keunggulan dusun
- Preview UMKM
- Statistik desa

### 🏪 Halaman UMKM
- Katalog produk dengan filter kategori
- Informasi pelaku UMKM
- Detail produk dengan harga
- Sistem kontak langsung

### ℹ️ Halaman Tentang Kami
- Sejarah dusun
- Visi & misi
- Budaya dan kearifan lokal
- Potensi ekonomi
- Program pengembangan

### 📞 Halaman Kontak
- Form kontak interaktif
- Informasi lokasi
- Media sosial
- Jam operasional

## 🎨 Tema & Desain

### Warna Utama
- **Hijau Primer**: `#16a34a` (Green-600)
- **Hijau Sekunder**: `#dcfce7` (Green-100)
- **Putih**: `#ffffff`
- **Abu-abu**: `#f8fafc` (Gray-50)

### Font
- **Primary**: Poppins (Google Fonts)
- **Weight**: 300, 400, 500, 600, 700

### Responsif
- Mobile-first design
- Breakpoints: sm (640px), md (768px), lg (1024px), xl (1280px)
- Optimized untuk semua device

## 🛠️ Teknologi

### Backend
- **Framework**: Laravel 12.x
- **PHP**: 8.2+
- **Database**: MySQL/SQLite

### Frontend
- **CSS Framework**: Tailwind CSS 4.x
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Poppins)
- **Build Tool**: Vite

### Dependencies
```json
{
  "laravel/framework": "^12.0",
  "tailwindcss": "^4.0.0",
  "vite": "^7.0.4"
}
```

## 🚀 Instalasi

### Prerequisites
- PHP 8.2 atau lebih tinggi
- Composer
- Node.js & npm
- Web server (Apache/Nginx)

### Langkah Instalasi

1. **Clone repository**
   ```bash
   git clone [repository-url]
   cd web-dusun-nglampengan
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Setup database**
   ```bash
   php artisan migrate
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Start development server**
   ```bash
   php artisan serve
   npm run dev
   ```

## 📁 Struktur Proyek

```
web-dusun-nglampengan/
├── app/
│   └── Http/Controllers/
│       ├── HomeController.php
│       ├── UMKMController.php
│       ├── AboutController.php
│       └── ContactController.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── home.blade.php
│   │   ├── umkm.blade.php
│   │   ├── about.blade.php
│   │   └── contact.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── routes/
│   └── web.php
└── public/
    └── favicon.ico
```

## 🎯 Halaman & Route

| Halaman | Route | Controller | Deskripsi |
|---------|-------|------------|-----------|
| Beranda | `/` | HomeController | Halaman utama website |
| UMKM | `/umkm` | UMKMController | Katalog produk UMKM |
| Tentang Kami | `/about` | AboutController | Informasi tentang dusun |
| Kontak | `/contact` | ContactController | Form kontak & informasi |

## 📱 Responsivitas

Website ini dirancang responsif dengan breakpoint berikut:

- **Mobile**: < 640px
- **Tablet**: 640px - 1024px
- **Desktop**: > 1024px

### Fitur Responsif
- Navigation menu yang collapse di mobile
- Grid layout yang adaptif
- Font size yang menyesuaikan
- Touch-friendly buttons

## 🎨 Komponen UI

### Navigation
- Sticky header dengan logo
- Mobile hamburger menu
- Active state indicators

### Cards
- Product cards dengan hover effects
- Feature cards dengan icons
- Contact info cards

### Buttons
- Primary buttons (hijau)
- Secondary buttons (outline)
- Icon buttons

### Forms
- Contact form dengan validation
- Responsive form layout
- Focus states

## 🔧 Customization

### Mengubah Warna
Edit file `resources/css/app.css`:
```css
.bg-primary-green {
    background-color: #your-color;
}
```

### Mengubah Konten
- Edit file view di `resources/views/`
- Update controller di `app/Http/Controllers/`
- Modifikasi route di `routes/web.php`

### Menambah Halaman
1. Buat controller baru
2. Tambah route di `web.php`
3. Buat view file
4. Update navigation

## 📊 SEO & Performance

### SEO Features
- Meta tags yang lengkap
- Semantic HTML structure
- Alt text untuk images
- Sitemap ready

### Performance
- Optimized images
- Minified CSS/JS
- Lazy loading ready
- Caching strategies

## 🚀 Deployment

### Production Build
```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Hosting Requirements
- PHP 8.2+
- MySQL/PostgreSQL
- Web server (Apache/Nginx)
- SSL certificate (recommended)

## 📞 Support

Untuk pertanyaan atau dukungan teknis:
- Email: info@dusunnglampengan.com
- WhatsApp: +62 812-3456-7890

## 📄 License

Proyek ini dibuat untuk KKN Dusun Ngelampengan. Semua hak dilindungi.

## 🙏 Credits

- **Framework**: Laravel Team
- **CSS Framework**: Tailwind CSS
- **Icons**: Font Awesome
- **Fonts**: Google Fonts
- **Design**: KKN Team

---

**Dibuat dengan ❤️ untuk Dusun Ngelampengan**
