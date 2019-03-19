FROM php:fpm-alpine

RUN docker-php-ext-install pdo_mysql

RUN apk add gosu --update --no-cache --repository http://dl-3.alpinelinux.org/alpine/edge/testing/ --allow-untrusted && \
    addgroup jeremy && \
    adduser -D -h /home -s /bin/bash -G jeremy jeremy

USER jeremy
