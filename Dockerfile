# Dockerfile
FROM php:8.2-fpm

# Mise à jour et installation des dépendances système pour GD et autres
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql

# Nettoyage
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
