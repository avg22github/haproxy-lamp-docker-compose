FROM php:8.0-apache

COPY ./sql/* /var/www/lamp/

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

COPY lamp.conf /etc/apache2/sites-available/
RUN a2dissite 000-default.conf
RUN a2dissite default-ssl.conf
RUN a2ensite lamp.conf
RUN chown www-data:www-data /var/www/lamp/
CMD ["apachectl", "-D", "FOREGROUND"]