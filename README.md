<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## intruksi untuk pakai tamplate
- buat database baru
- import database dari file sql di *public/presentation/linktree-admin.sql*
- copy file .env example
- dan rename menjadi .env
- edit bagian database, user dan password database pada file .env sesuai dengan database dan user yang di gunakan
- composer install
- php artisan key:generate
- php artisan serve

## voyeger dokumentasi 
voyeger dokumentasi bisa di akses [disini](https://voyager-docs.devdojo.com/getting-started/installation)

## buat laravel project laravel dengan versi
composer create-project --prefer-dist laravel/laravel:^9.0 attendance app

## Detail Project
ini merupakan aplikasi seperti linktree beberapa fiture yang di sediakan;
- update foto profile
- update background
- crud link list

## Screenshot Aplikasi
### Tampilan User
![Tampilan user](https://github.com/magerngulik/laravel_linktree/blob/main/public/presentation/ss.png)
### Tampilan Admin
- menu profile
![Tampilan user](https://github.com/magerngulik/laravel_linktree/blob/main/public/presentation/menu%20profile.png)
- menu link
![Tampilan user](https://github.com/magerngulik/laravel_linktree/blob/main/public/presentation/menu%20link.png)