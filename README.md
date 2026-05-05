# Sistem Manajemen Data Sederhana (CRUD PHP & MySQL)

Proyek ini adalah aplikasi web sederhana berbasis PHP dan MySQL untuk mengelola data (Create dan Delete). Menggunakan **Bootstrap 5** untuk tampilan yang responsif dan bersih.

## Fitur Utama
* **Tambah Data**: Input nama, email, dan nomor handphone melalui form.
* **Tampilkan Data**: Menampilkan daftar data yang tersimpan dalam tabel secara otomatis.
* **Hapus Data**: Menghapus data spesifik dengan konfirmasi keamanan.
* **Keamanan Dasar**: Menggunakan `mysqli_real_escape_string` untuk mencegah SQL Injection pada file `proses.php`.

---

## Persyaratan Sistem
* **XAMPP** (PHP 7.4 ke atas)
* **Web Browser** (Chrome, Edge, Firefox, dll)

---

## Langkah Instalasi & Konfigurasi

### 1. Persiapan Folder
1.  Download atau clone repositori ini.
2.  Pindahkan folder proyek ke dalam direktori `htdocs` XAMPP kamu (biasanya di `C:\xampp\htdocs\nama-folder-kamu`).

### 2. Konfigurasi Database (XAMPP)
1.  Buka **XAMPP Control Panel** dan jalankan modul **Apache** serta **MySQL**.
2.  Buka browser dan akses **phpMyAdmin** di `http://localhost/phpmyadmin/`.
3.  Klik tab **SQL** dan masukkan query berikut untuk membuat database dan tabel:

```sql
-- 1. Membuat Database
CREATE DATABASE IF NOT EXISTS formulir;

-- 2. Menggunakan Database tersebut
USE formulir;

-- 3. Membuat Tabel di dalamnya
CREATE TABLE IF NOT EXISTS tabel_data (
  nomor int(11) NOT NULL AUTO_INCREMENT,
  nama varchar(100) NOT NULL,
  email varchar(50) NOT NULL,
  handphone varchar(20) NOT NULL,
  PRIMARY KEY (nomor)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

### 3. Menjalankan Aplikasi
Akses aplikasi melalui browser dengan mengetik:
```
http://localhost/nama-folder-kamu/index.php
```

---

## Struktur File
* `koneksi.php`: Pengaturan koneksi database MySQL.
* `index.php`: Halaman utama yang menampilkan form input dan tabel data.
* `proses.php`: File logika pusat untuk menangani proses simpan dan hapus data.
* `tambah.php` & `hapus.php`: File fungsional mandiri (opsional/alternatif dari proses.php).

---

## Catatan Tambahan
Jika kamu menggunakan password pada MySQL (XAMPP default biasanya kosong), pastikan untuk menyesuaikan variabel `$pass` pada file `koneksi.php`:

```php
$host = "localhost";
$user = "root";
$pass = "password_kamu_disini"; // Isi jika ada
$db   = "formulir";
```
