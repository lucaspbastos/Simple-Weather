# Use the official PHP 8.3 image with Apache
FROM php:8.3-apache

# Set the working directory
WORKDIR /var/www/html

# Copy application files into the container
COPY index.html /var/www/html/
COPY weather.php /var/www/html/
COPY .htaccess /var/www/html/

# Enable necessary Apache modules
RUN a2enmod headers

# Ensure proper permissions for the application
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (Render automatically maps ports)
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]