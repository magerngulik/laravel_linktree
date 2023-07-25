<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## intruksi untuk pakai tamplate
- rubah dulu env di data
- buat database baru dan setup di env
- composer install
- php artisan key:generate
- php artisan voyager:install (ini migrasi data dari voyeger jadi tidak perlu upload dari data lama)
- php artisan voyager:admin your@email.com --create (buat akun untuk login)

## voyeger dokumentasi 
voyeger dokumentasi bisa di akses [disini](https://voyager-docs.devdojo.com/getting-started/installation)

## buat laravel project laravel dengan versi
composer create-project --prefer-dist laravel/laravel:^9.0 attendance app

## Detail Project
ini merupakan aplikasi seperti linktree beberapa fiture yang di sediakan;
- update foto profile
- update background
- crud link list
