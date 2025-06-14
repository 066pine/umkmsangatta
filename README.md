<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Cara Menjalankan Proyek UMKMSANGATTA

## Persyaratan

Sebelum menjalankan proyek ini, pastikan Anda telah menginstal:

- PHP versi 8.2 atau lebih baru
- Composer
- Node.js dan npm
- Database (seperti MySQL, PostgreSQL, atau SQLite)

## Langkah-Langkah

### 1. Clone Repository

Clone repository ini ke komputer Anda:

```bash
git clone <URL_REPOSITORY>
```

### 2. Instal Dependensi

Jalankan perintah berikut untuk menginstal dependensi PHP dan Node.js:

```bash
composer install
npm install
```

### 3. Konfigurasi File `.env`

Salin file `.env.example` menjadi `.env`:

```bash
cp 

.env.example

 .env
```

Edit file `.env` sesuai dengan konfigurasi database dan aplikasi Anda.

### 4. Generate Key

Generate aplikasi key Laravel:

```bash
php artisan key:generate
```

### 5. Migrasi Database

Jalankan migrasi database:

```bash
php artisan migrate
```

### 6. Jalankan Server

Jalankan server pengembangan Laravel:

```bash
php artisan serve
```

### 7. Jalankan Vite untuk Frontend

Jalankan Vite untuk mengembangkan frontend:

```bash
npm run dev
```

### 8. Akses Aplikasi

Buka browser dan akses aplikasi di:

```
http://localhost:8000
```

```



```
