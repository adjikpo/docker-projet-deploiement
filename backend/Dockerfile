FROM php:7.4-apache
COPY . /var/www/html
COPY ./conf/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN docker-php-ext-install pdo pdo_mysql

