# Menggunakan image PHP resmi dengan Apache
FROM php:7.4-apache

# Salin kode aplikasi ke dalam container
COPY src/ /var/www/html/

# Install ekstensi MySQL untuk PHP
RUN docker-php-ext-install mysqli
