<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Mini Bootcamp Laravel

Repository ini berisi projek sederhana Laravel, dan dapat digunakan untuk bahan belajar sebagai perbandingan ketika membuat projek Laravel sendiri.

Poin-poin yang dibuat pada repository ini adalah:

-   Dasar Routing (Bagaimana membuat route sederhana)
-   Blade, Controllers, Database, dan Form
-   CRUD dan autentikasi

## Kebutuhan yang harus disiapkan

-   PHP 8.1 atau 8.2 (Bisa gunakan [Laragon](https://laragon.org/download), [XAMPP 8.2](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/))
-   PHP 8.2 khusus Laragon ([Download PHP 8.2](https://windows.php.net/download#php-8.2)) (Bukan di install, di ekstrak)
-   [Composer](https://getcomposer.org/download/) (Untuk install Laravel)
-   [Git Bash](https://git-scm.com/downloads) (Untuk remote GitHub) * opsional
-   [Visual Studio Code](https://code.visualstudio.com/)
-   VS Code extensions: Laravel Extension Pack, PHP Intelephense, GitHub Repositories (opsional)

## Clone repository

### Sesi 1 - Pengenalan Laravel dan Dasar Routing

Anda dapat melakukan clone repository ini sebagai bahan untuk belajar.
Jalankan perintah berikut:

```bash
git clone https://github.com/holupeas/mini-bootcamp-laravel.git
```

Untuk branch `main` hanya berisi pembelajaran poin pertama, yaitu Dasar Routing.

Masuk ke folder `mini-bootcamp-laravel`

```bash
cd mini-bootcamp-laravel
```

Copy file .env.example menjadi .env
```bash
cp .env.example .env
```

Install dependency dengan `composer`

```bash
composer install
```

## Akses branch untuk sesi lainnya

### Sesi 2 - Blade Template, Controller, Model, Database, Form
Untuk melihat poin pembelajaran sesi 2, buat dulu `branch` baru dengan nama:
`sesi-2-blade-controller-database-form`

```bash
git branch sesi-2-blade-controller-database-form
```

Pindah ke branch `sesi-2-blade-controller-database-form`

```bash
git switch sesi-2-blade-controller-database-form
```

Lakukan pull branch (mengambil branch sesi-2)

```bash
git pull origin sesi-2-blade-controller-database-form
```
### Sesi 3 - CRUD Lengkap
Jika ingin melihat poin pembelajaran sesi 3, lakukan hal yang sama. Silahkan buat branch baru dengan nama `sesi-3-crud-lengkap`

```bash
git branch sesi-3-crud-lengkap
```

Pindah ke branch `sesi-3-crud-lengkap`

```bash
git switch sesi-3-crud-lengkap
```

Lakukan pull branch (mengambil branch sesi-3)

```bash
git pull origin sesi-3-crud-lengkap
```

## Contributing

Tidak dapat melakukan pull request, karena repository ini hanya untuk bahan belajar, tidak akan dikembangkan lebih jauh lagi.
