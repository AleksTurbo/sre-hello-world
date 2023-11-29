FROM php:8.2-fpm

RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install -j$(nproc) pgsql pdo_pgsql

ENV LANG C.UTF-8
ENV LANGUAGE C.UTF-8
ENV LC_ALL C.UTF-8

ENV PATH /var/www/sre:$PATH

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www/sre

CMD ["php-fpm"]
