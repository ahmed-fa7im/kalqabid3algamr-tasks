#using php with apache
FROM php:7.4-apache

# install mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

# copy files
COPY . /var/www/html/

# open port 80
EXPOSE 80