FROM php:7.3-fpm-buster

# Apps
RUN apt-get update;
RUN apt-get install -y cron;
RUN apt-get install -y default-mysql-client;
RUN apt-get install -y git;
RUN apt-get install -y gzip;
RUN apt-get install -y libbz2-dev;
RUN apt-get install -y libfreetype6-dev;
RUN apt-get install -y libicu-dev;
RUN apt-get install -y libjpeg62-turbo-dev;
RUN apt-get install -y libmcrypt-dev;
RUN apt-get install -y libpng-dev;
RUN apt-get install -y libsodium-dev;
RUN apt-get install -y libssh2-1-dev;
RUN apt-get install -y libxslt1-dev;
RUN apt-get install -y libzip-dev;
RUN apt-get install -y lsof;
RUN apt-get install -y procps;
RUN apt-get install -y redis-tools;
RUN apt-get install -y vim;
RUN apt-get install -y wget;
RUN apt-get install -y zip;

# PHP Ext
RUN docker-php-ext-install bcmath;
RUN docker-php-ext-install bz2;
RUN docker-php-ext-install calendar;
RUN docker-php-ext-install exif;
RUN docker-php-ext-install gd;
RUN docker-php-ext-install gettext;
RUN docker-php-ext-install intl;
RUN docker-php-ext-install mbstring;
RUN docker-php-ext-install mysqli;
RUN docker-php-ext-install opcache;
RUN docker-php-ext-install pcntl;
RUN docker-php-ext-install pdo_mysql;
RUN docker-php-ext-install soap;
RUN docker-php-ext-install sockets;
RUN docker-php-ext-install sodium;
RUN docker-php-ext-install sysvmsg;
RUN docker-php-ext-install sysvsem;
RUN docker-php-ext-install sysvshm;
RUN docker-php-ext-install xsl;
RUN docker-php-ext-install zip;

# GD / Captcha
RUN docker-php-ext-configure \
  gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Magerun
RUN \
  curl -sS -o n98-magerun2.phar https://files.magerun.net/n98-magerun2.phar &&  \
  chmod +x n98-magerun2.phar && \
  mv n98-magerun2.phar /usr/local/bin/n98-magerun2.phar

# Install InteGentoMageTools2
RUN mkdir /home/tools && \
   cd /home/tools && \
   git clone --recursive -j8 https://github.com/InteGento/InteGentoMageTools2.git
