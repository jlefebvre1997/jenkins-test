FROM composer:1.7.2
FROM php:fpm-alpine

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

RUN docker-php-ext-install pdo_mysql

RUN apk add git

RUN apk add gosu --update --no-cache --repository http://dl-3.alpinelinux.org/alpine/edge/testing/ --allow-untrusted && \
    addgroup jeremy && \
    adduser -D -h /home -s /bin/bash -G jeremy jeremy

USER jeremy
