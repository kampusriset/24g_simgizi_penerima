# 24g_simgizi_penerima

## 🥗 SIMGIZI: Modul Pengelolaan Penerima Manfaat

Sistem Informasi Gizi (**SIMGIZI**) adalah platform terintegrasi yang dirancang untuk memantau, mendistribusikan, dan mengelola data penerima bantuan gizi secara efisien dan akurat. Modul ini dikhususkan untuk **Pengelolaan Data Penerima Manfaat**, mencakup pendataan personal, klasifikasi sekolah, hingga monitoring distribusi bantuan.

Proyek ini dikembangkan sebagai pemenuhan **Ujian Tengah Semester (UTS) Genap** pada mata kuliah **Pemrograman Web**.

---

## 👥 Tim Pengembang (Kontributor)

| Nama Pengembang          | GitHub                                         |
| :----------------------- | :--------------------------------------------- |
| **RIZKY ANDIKA SUKMA**   | [@ka-zukii](https://github.com/ka-zukii)       |
| **ANANG SETIAJI**        | [@ikzuu](https://github.com/ikzuu)             |
| **ADHI KURNIAWAN**       | [@Strangerr01](https://github.com/Strangerr01) |
| **RIZAL TEGAR HERMAWAN** | [@RizpakeL](https://github.com/RizpakeL)       |

---

## 📁 Folder Architecture

```bash
penerima-manfaat/
├── components/    # Komponen UI modular (Header, Sidebar, Popup)
├── config/        # Konfigurasi database
├── controllers/   # Logika pemrosesan data (Auth, Sekolah, Penerima)
├── helpers/       # Fungsi pembantu (Utility)
├── middleware/    # Autentikasi dan keamanan akses
├── models/        # Representasi data (Interaksi database)
├── public/        # Asset statis (JavaScript, CSS, dll.)
├── routes/        # Definisi rute aplikasi
├── views/         # Antarmuka pengguna (Login, Dashboard)
└── index.php      # Entry point aplikasi
```

---

## 🛠️ Stack Teknologi

- **Language:** PHP
- **Database:** MySQL
- **Frontend:** JavaScript, TailwindCSS, HTML
- **Architecture:** MVC Pattern

---

## 🚀 Fitur Utama Modul

1. **Sistem Autentikasi & Middleware:** Proteksi halaman dashboard menggunakan session token. User yang belum login otomatis dialihkan kembali ke halaman login.
2. **Manajemen Penerima Manfaat (Siswa):** Pengelolaan data menyeluruh untuk siswa penerima gizi, lengkap dengan validasi relasi data terhadap sekolah asal.
3. **User Experience yang Interaktif:** Penggunaan modal konfirmasi dinamis (JavaScript terintegrasi) untuk mencegah terjadinya salah hapus (_accidental deletion_) pada data kritikal.

---

## 🎯 Tujuan Pengembangan

Proyek ini dibuat untuk:

- Memenuhi tugas Ujian Tengah Semester mata kuliah Pemrograman Web.
- Menerapkan konsep MVC pada PHP Native.
- Mengimplementasikan operasi CRUD pada aplikasi web.
- Memahami penggunaan session dan middleware untuk autentikasi.
- Melatih kolaborasi tim dalam pengembangan perangkat lunak.

---

## 📋 Langkah-Langkah Instalasi & Penggunaan

Ikuti langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

### 1. Kloning Repositori

Buka terminal/command prompt Anda lalu jalankan perintah:

```bash
git clone https://github.com/kampusriset/24g_simgizi_penerima.git
```

### 2. Konfigurasi Server Lokal

- Pindahkan folder proyek `penerima-manfaat` ke dalam direktori server lokal Anda (misal: `htdocs` jika menggunakan XAMPP atau `www` jika menggunakan Laragon).
- Pastikan service **Apache** dan **MySQL** Anda sudah aktif.

### 3. Import Database

- Buka browser dan akses `http://localhost/phpmyadmin`.
- Buat database baru dengan nama, misalnya: `db_simgizi`.
- Lakukan import file `.sql` atau buat tabel berdasarkan rancangan struktur dari file `models/`.

### 4. Sesuaikan Konfigurasi Database

Buka file `config/database.php` dan sesuaikan kredensial server lokal Anda:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_simgizi');

```

### 5. Jalankan Aplikasi

Buka browser kesayangan Anda lalu akses URL berikut:

```http
http://localhost/penerima-manfaat

```

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan akademik dan pembelajaran sebagai bagian dari tugas mata kuliah Pemrograman Web.
