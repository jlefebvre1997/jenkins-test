FROM composer:1.7.2
FROM jenkins/jenkins:lts

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

EXPOSE 8080
