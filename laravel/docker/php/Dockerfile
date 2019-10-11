# Base Image
FROM php:7.3.9-fpm-stretch
LABEL Name=vietawake

# Installing Dependences
RUN apt-get update && apt-get install -y --no-install-recommends \
    build-essential \
    mysql-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libmagickwand-dev \
    libzip-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    && pecl install imagick

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath opcache
RUN docker-php-ext-enable imagick

RUN docker-php-ext-install opcache

ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS="0" \
    PHP_OPCACHE_MAX_ACCELERATED_FILES="10000" \
    PHP_OPCACHE_MEMORY_CONSUMPTION="192" \
    PHP_OPCACHE_MAX_WASTED_PERCENTAGE="10"

# Install composer
ENV COMPOSER_HOME /composer \
    PATH ./vendor/bin:/composer/vendor/bin:$PATH \
    COMPOSER_ALLOW_SUPERUSER 1 \
RUN curl --silent --show-error https://getcomposer.org/installer | php
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN echo fr_FR.UTF-8 UTF-8 > /etc/locale.gen && locale-gen

WORKDIR /var/www/html
