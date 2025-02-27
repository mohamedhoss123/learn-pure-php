# Dockerfile
FROM php:8.2-apache

# Install necessary extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache modules (if needed)
RUN a2enmod rewrite

# Copy your application code (handled by docker-compose volume)
# COPY ./src /var/www/html

# Set working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Apache starts by default, no need for CMD