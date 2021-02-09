FROM php:7.4-fpm
MAINTAINER Fellipe Garcias - fellipeg.rjqoor@gmail.com

WORKDIR /var/www

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    # Install Composer
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

EXPOSE 8000

