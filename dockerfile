FROM php:8.2-apache

COPY . /var/www/html/

EXPOSE 80

RUN mkdir -p /var/www/html/uploads

RUN chown -R www-data:www-data /var/www/html/uploads

RUN chmod -R 775 /var/www/html/uploads