FROM php:8.1-fpm-buster

ARG TIMEZONE
ARG ENABLE_XDEBUG

RUN apt-get update && apt-get install -y \
    gnupg \
    g++ \
    procps \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libicu-dev  \
    libonig-dev \
    libxslt1-dev \
    cron \
    vim \
    acl \
    curl \
    libmagickwand-dev \
    && echo 'alias sf="php bin/console"' >> ~/.bashrc

RUN apt-get -y install supervisor && \
  mkdir -p /var/log/supervisor && \
  mkdir -p /etc/supervisor/conf.d

RUN docker-php-ext-configure gd --with-jpeg --with-freetype

# RUN docker-php-ext-install json
RUN docker-php-ext-install mysqli
#RUN docker-php-ext-install curl
#RUN docker-php-ext-install dom
RUN docker-php-ext-install exif
#RUN docker-php-ext-install fileinfo
#RUN docker-php-ext-install hash
#RUN docker-php-ext-install imagick
RUN pecl install imagick
RUN docker-php-ext-enable imagick
#RUN docker-php-ext-install mbstring
#RUN docker-php-ext-install openssl
#RUN docker-php-ext-install pcre
#RUN docker-php-ext-install xml
RUN docker-php-ext-install zip
#2 RUN docker-php-ext-install memcached
#2 RUN docker-php-ext-install opcache
#2 RUN docker-php-ext-install redis
#RUN docker-php-ext-install bc
#RUN docker-php-ext-install filter
#RUN docker-php-ext-install image
#RUN docker-php-ext-install iconv
RUN docker-php-ext-install intl
#RUN docker-php-ext-install simplexml
#RUN docker-php-ext-install sodium
#RUN docker-php-ext-install xmlreader
#RUN docker-php-ext-install zlib
#RUN docker-php-ext-install ssh2
#RUN docker-php-ext-install ftp
RUN docker-php-ext-install sockets

RUN pecl install apcu && docker-php-ext-enable apcu

RUN if [ ${ENABLE_XDEBUG} = 1 ]; \
    then echo "ENABLE XDEBUG"; \
    else echo "XDEBUG DISABLED"; \
    fi

RUN if [ ${ENABLE_XDEBUG} = 1 ]; \
        then pecl install xdebug-3.1.6 \
        && docker-php-ext-enable xdebug \
        && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && echo "xdebug.client_port=9007" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && echo "xdebug.idekey=PHPSTORM" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
    fi;

COPY php.ini /usr/local/etc/php/php.ini
COPY php.ini /usr/local/etc/php-fpm.d/php.ini
COPY php-fpm.conf /usr/local/etc/php-fpm.d/php-fpm.conf
COPY www.conf /usr/local/etc/php-fpm.d/www.conf
COPY www.conf /usr/local/etc/php-fpm.d/www.conf.default

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/wordpress

EXPOSE 9000
