FROM php:7.4.0-fpm-alpine
LABEL maintainer "ttc007"

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer

# PHP Settings
RUN set -eux && \
  # changer le fuseau horaire
  docker-php-ext-install pdo_mysql && \
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
