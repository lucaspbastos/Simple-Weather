FROM php:8.3-apache
WORKDIR /var/www/html

COPY . .
RUN a2enmod headers && service apache2 restart

EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]