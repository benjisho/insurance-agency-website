FROM php:7.4-apache

WORKDIR /var/www/html

# Copy index.html and relevant directories
COPY ../index.html .
COPY ../assets ./assets
COPY ../pages ./pages
COPY ../php ./php

# Enable Apache rewrite module
RUN a2enmod rewrite

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start Apache web server
CMD ["apache2-foreground"]
