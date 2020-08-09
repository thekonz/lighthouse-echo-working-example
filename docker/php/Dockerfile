FROM thekonz/composer2 AS composer
FROM php:7.4-fpm

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

RUN apt-get update && apt-get install -y git zip unzip libzip-dev

RUN docker-php-ext-install pdo_mysql mysqli zip \
    && pecl install redis \
    && docker-php-ext-enable redis
