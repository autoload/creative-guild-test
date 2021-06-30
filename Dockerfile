FROM php:7.4-fpm

RUN docker-php-ext-install pdo pdo_mysql && pecl install redis-5.1.1 && docker-php-ext-enable redis