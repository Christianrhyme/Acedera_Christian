# Gumamit ng official PHP 8 image with Apache
FROM php:8.0-apache

# Enable Apache mod_rewrite (important para sa CRUD routing)
RUN a2enmod rewrite

# Install dependencies
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy project files to /var/www/html
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
