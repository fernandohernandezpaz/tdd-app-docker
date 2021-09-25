FROM composer:2 as composer2
FROM node:14-alpine as nodejs
FROM php:8.0-fpm-alpine

RUN apk update && apk upgrade

RUN apk add --update nodejs npm

RUN set -ex && apk --no-cache add postgresql-dev

RUN docker-php-ext-install pdo pdo_pgsql sockets

RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer2 /usr/bin/composer /usr/bin/composer

COPY --from=nodejs / /

WORKDIR /app

USER 1000
