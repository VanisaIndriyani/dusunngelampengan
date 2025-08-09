# SISTEM MULTI-RT DESA NGLAMPENGAN

## 📋 OVERVIEW

Sistem multi-RT memungkinkan setiap RT (Rukun Tetangga) di Desa Nglampengan memiliki akun terpisah untuk mengelola UMKM dan produk di wilayahnya masing-masing. Sistem ini terdiri dari 5 RT dengan akses terbatas hanya pada data wilayahnya sendiri.

---

## 🏗️ ARSITEKTUR SISTEM

### **Role-Based Access Control (RBAC)**
- **Admin**: Akses penuh ke seluruh sistem
- **RT**: Akses terbatas hanya ke data RT-nya sendiri

### **Struktur Database**
```
users
├── id
├── name
├── email
├── password
├── is_admin (boolean)
├── role (enum: 'admin', 'rt')
├── rt_number (string) - untuk RT
├── phone (string)
├── address (text)
└── is_active (boolean)

umkm
├── id
├── name
├── description
├── category
├── rt_number (string) - foreign key ke users.rt_number
├── image
├── owner_name
├── owner_phone
├── address
└── is_active

products
├── id
├── name
├── description
├── category
├── rt_number (string) - foreign key ke users.rt_number
├── image
├── price
├── owner_name
├── owner_phone
└── is_active
```

---

## 👥 AKUN RT YANG TERSEDIA

### **RT 001**
- **Email**: rt001@nglampengan.com
- **Password**: rt001123
- **Wilayah**: RT 001, Desa Nglampengan

### **RT 002**
- **Email**: rt002@nglampengan.com
- **Password**: rt002123
- **Wilayah**: RT 002, Desa Nglampengan

### **RT 003**
- **Email**: rt003@nglampengan.com
- **Password**: rt003123
- **Wilayah**: RT 003, Desa Nglampengan

### **RT 004**
- **Email**: rt004@nglampengan.com
- **Password**: rt004123
- **Wilayah**: RT 004, Desa Nglampengan

### **RT 005**
- **Email**: rt005@nglampengan.com
- **Password**: rt005123
- **Wilayah**: RT 005, Desa Nglampengan

---

## 🔐 FITUR KEAMANAN

### **1. Middleware Protection**
- **Auth Middleware**: Memastikan user sudah login
- **RT Middleware**: Memastikan RT hanya akses data RT-nya
- **Admin Middleware**: Memastikan admin memiliki akses penuh

### **2. Data Isolation**
- RT hanya dapat melihat dan mengelola data UMKM/produk dari RT-nya
- Admin dapat melihat dan mengelola semua data
- Validasi otomatis berdasarkan rt_number

### **3. Role Validation**
- Pengecekan role di setiap controller
- Redirect otomatis jika akses tidak sah
- Error handling untuk unauthorized access

---

## 🎯 FITUR UTAMA

### **Dashboard RT**
- Statistik UMKM dan produk RT
- Data terbaru dari RT tersebut
- Quick actions untuk menambah data

### **Manajemen UMKM**
- Tambah UMKM baru
- Edit informasi UMKM
- Hapus UMKM
- Upload foto UMKM
- Filter berdasarkan kategori

### **Manajemen Produk**
- Tambah produk baru
- Edit informasi produk
- Hapus produk
- Upload foto produk
- Set harga produk

### **Profil RT**
- Update informasi profil
- Ganti password
- Update nomor telepon dan alamat

---

## 🛠️ IMPLEMENTASI TEKNIS

### **1. Migration**
```bash
# Jalankan migration untuk menambah kolom baru
php artisan migrate

# Migration yang dibuat:
- add_role_and_rt_info_to_users_table
- add_rt_number_to_umkm_and_products_tables
```

### **2. Seeder**
```bash
# Jalankan seeder untuk membuat akun RT
php artisan db:seed --class=RTSeeder
```

### **3. Middleware Registration**
```php
// bootstrap/app.php
$middleware->alias([
    'admin' => \App\Http\Middleware\AdminMiddleware::class,
    'rt' => \App\Http\Middleware\RTMiddleware::class,
]);
```

### **4. Routes**
```php
// RT Routes dengan middleware protection
Route::prefix('rt')->name('rt.')->middleware(['auth', 'rt'])->group(function () {
    // RT-specific routes
});
```

---

## 📱 ANTARMUKA PENGGUNA

### **Login Page**
- Form login dengan email dan password
- Validasi role otomatis
- Redirect ke dashboard sesuai role

### **RT Dashboard**
- `/rt/dashboard` - Dashboard utama RT
- `/rt/products` - Manajemen produk
- `/rt/umkm` - Manajemen UMKM
- `/rt/profile` - Profil RT

### **Admin Dashboard**
- `/admin/dashboard` - Dashboard admin
- Akses ke semua data RT
- Manajemen konten website

---

## 🔄 WORKFLOW SISTEM

### **1. Login Process**
```
User Login → Validasi Credentials → Check Role → Redirect to Dashboard
```

### **2. Data Access**
```
RT Request → Middleware Check → Filter by RT Number → Return Data
```

### **3. Data Creation**
```
RT Create Data → Auto-assign RT Number → Save to Database → Success Response
```

---

## 📊 MONITORING & ANALYTICS

### **Admin Analytics**
- Total UMKM per RT
- Total produk per RT
- Aktivitas RT terbaru
- Statistik website

### **RT Analytics**
- UMKM aktif di RT
- Produk aktif di RT
- Statistik RT sendiri

---

## 🚀 DEPLOYMENT CHECKLIST

### **Pre-deployment**
- [ ] Jalankan migration
- [ ] Jalankan seeder
- [ ] Test login semua RT
- [ ] Test data isolation
- [ ] Test admin access

### **Post-deployment**
- [ ] Ganti password default
- [ ] Setup email notification
- [ ] Backup database
- [ ] Monitor log access

---

## 🔧 MAINTENANCE

### **Regular Tasks**
- Backup database harian
- Monitor log access
- Update password RT secara berkala
- Review data UMKM dan produk

### **Security Updates**
- Update Laravel framework
- Review middleware security
- Audit user access
- Monitor suspicious activities

---

## 📞 SUPPORT

### **Technical Support**
- Email: admin@nglampengan.com
- WhatsApp: +62 812-3456-7890
- Documentation: Sistem_Multi_RT.md

### **RT Support**
- Training penggunaan sistem
- Bantuan teknis
- Reset password
- Troubleshooting

---

## 📋 USER GUIDE

### **Untuk RT**
1. Login dengan email dan password RT
2. Akses dashboard RT
3. Kelola UMKM dan produk RT
4. Update profil RT

### **Untuk Admin**
1. Login dengan akun admin
2. Akses admin dashboard
3. Monitor semua RT
4. Kelola konten website

---

**Dokumen ini dibuat untuk sistem multi-RT Desa Nglampengan**  
**Tanggal**: 31 Juli 2024  
**Versi**: 1.0  
**Status**: Production Ready 