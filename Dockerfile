# Use the official PHP image as the base image
FROM php:8.0-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy all files from the current directory to the working directory inside the container
COPY . .

# Install mysqli extension (assuming you're using MySQL/MariaDB)
RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Start Apache server when the container starts
CMD ["apache2-foreground"]
