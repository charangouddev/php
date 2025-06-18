# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy your PHP files into the web root
COPY . /var/www/html/

# Optional: Enable Apache mod_rewrite if needed
RUN a2enmod rewrite