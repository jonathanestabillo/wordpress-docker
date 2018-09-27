FROM php:7.2.9-fpm-alpine3.8

RUN apk update
RUN apk add --no-cache zlib-dev unzip git libxml2-dev mysql-client freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev libssh2-dev
RUN docker-php-ext-configure gd \
    --with-gd \
    --with-freetype-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ \
    --with-png-dir=/usr/include/
#RUN docker-php-ext-install zip opcache soap pdo_mysql libssh2-php
RUN pecl install ssh2-1.1.2
RUN docker-php-ext-enable ssh2
RUN docker-php-ext-install gd zip opcache soap pdo_mysql mysqli
RUN mkdir -p /wp
WORKDIR /wp