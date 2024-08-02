# Project Gym Management System

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/bayudani/BroGym/LICENSE)

## Deskripsi
Gym Management System adalah sebuah aplikasi berbasis web untuk manajemen gym, termasuk pendaftaran member, pemilihan paket membership, dan sistem absensi menggunakan scan barcode. Proyek ini dibangun menggunakan PHP native dan Taillwind  untuk tampilan antarmuka.

## Screenshot
![Gym Management System Screenshot](https://drive.google.com/file/d/1zZ7-jrYpnfplHipJHQfXeWihoWWpRE4p/view?usp=sharing)

## Teknologi yang Digunakan
Proyek ini dibangun menggunakan teknologi berikut:
- [PHP](https://www.php.net/): Digunakan untuk pengembangan backend.
- [Taillwind](https://semantic-ui.com/): Framework CSS untuk desain antarmuka.
- [Composer](https://getcomposer.org/): Manajer dependensi untuk PHP.
- [npm](https://www.npmjs.com/): Manajer paket untuk JavaScript.
- [Midtrans](https://midtrans.com/): Payment gateway untuk transaksi pembayaran.
- [PHPMailer](https://github.com/PHPMailer/PHPMailer): Library untuk mengirim email.
- [Instascan](https://github.com/schmich/instascan): Library JavaScript untuk membaca QR code.

## Fitur
- Pendaftaran dan login pengguna.
- Pemilihan paket membership dan pembayaran online.
- Sistem absensi member menggunakan scan barcode.
- Admin panel untuk mengelola member, produk, dan transaksi.

## Instalasi
Berikut adalah langkah-langkah untuk menginstal dan menjalankan proyek ini secara lokal:

### Prasyarat
Pastikan Anda sudah menginstal:
- [laragon](https://laragon.org/download/)
- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/) dan npm

### Langkah-langkah Instalasi

1. **Clone Repository**
   ```sh
   git clone https://github.com/bayu dani/BroGym.git
   
2. **Install Depedensi PHP**
   ```sh
   composer install

   
3. **Install Depedensi JavaScript**
   ```sh
   npm install

4. **buat file configurasi di folder config "midtrans-config.php**
   ```sh
   require './vendor/autoload.php';

   // Set your Merchant Server Key
   \Midtrans\Config::$serverKey = 'Your Server Key'
   // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
   \Midtrans\Config::$isProduction = false;
   // Set sanitization on (default)
   \Midtrans\Config::$isSanitized = true
   // Set 3DS transaction for credit card to true
   \Midtrans\Config::$is3ds = true

4. **buat file configurasi di folder config "smtp-config.php**
   ```sh
   require './vendor/autoload.php'; // Include Composer's autoloader

   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
   // File config/smtp-config.php

   $smtpHost = 'smtp.gmail.com';
   $smtpAuth = true;
   $smtpUsername = 'youremail@gmail.com';
   $smtpPassword = 'APP PASSWORD';




