FROM php:8.0.3-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

# timezone environment
ENV TZ=UTC \
  # locale
  LANG=ja_JP.UTF-8 \
  LANGUAGE=ja_JP:ja \
  # composer environment
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install git libicu-dev libonig-dev libzip-dev unzip tzdata && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
  mkdir /var/run/php-fpm && \
  mkdir /var/log/php && \
  docker-php-ext-install intl pdo_mysql zip bcmath && \
  composer config -g process-timeout 3600 && \
  composer config -g repos.packagist composer https://packagist.org

RUN pecl install xdebug && \
  docker-php-ext-enable xdebug

COPY ./php-fpm.d/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf
COPY ./php.ini /etc/php/php.ini

WORKDIR /var/www/html
