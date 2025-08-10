FROM php:8.2-fpm

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update --fix-missing && \
    apt-get install -y --fix-missing \
        libpng-dev \
        libjpeg-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip \
        libzip-dev \
        libpq-dev \
        libcurl4-openssl-dev \
        libssl-dev \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-jpeg && \
    docker-php-ext-install \
        pdo \
        pdo_mysql \
        mbstring \
        zip \
        exif \
        pcntl \
        bcmath \
        gd

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY ./ /var/www

RUN composer install --no-dev --optimize-autoloader && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
