FROM composer:2 as composer2
FROM php:8.0-fpm-alpine

RUN apk update && apk upgrade

RUN set -ex && apk --no-cache add postgresql-dev

RUN docker-php-ext-install pdo pdo_pgsql sockets

RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

USER 1000:1000
