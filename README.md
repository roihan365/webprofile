
# Web Portofolio
![Web Portofolio Logo](https://github.com/roihan365/webprofile/blob/main/public/assets/img/logo-ahay.png)

## Deskripsi
Web portofolio ini dibangun menggunakan Laravel 11. Proyek ini bebas digunakan untuk keperluan komersial, jadi siapapun bebas menggunakan project ini dengan atau tanpa atribusi terhadap saya, Muhammad Sohiburroihan Akbar.

## Fitur
- Menampilkan portofolio proyek
- Kategori proyek
- Informasi detail proyek
- Carousel gambar untuk setiap proyek
- URL proyek dan repositori GitHub

## Cara Install
Untuk menjalankan aplikasi, ikuti langkah-langkah di bawah ini menggunakan terminal:

### Clone Repository
```bash
  git clone https://github.com/roihan365/umkm-sehati
```
### Install dependensi dan library
```bash
  composer Install
  npm Install
```

### Copy file .env.example, dan generate key. kemudian atur database di file .env
```bash
  cp .env.example .env
  php artisan key:generate
```

###  Migrasi table database dan seeder
```bash
  php artisan migrate --seed
```

### Menjalankan aplikasi
```bash
  php artisan serve
```
```bash
  npm run dev
```