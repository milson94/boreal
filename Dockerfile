# Use an official PHP image as the base image
FROM php:8.1-cli

# Set the working directory inside the container
WORKDIR /app

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    && docker-php-ext-install pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js and Yarn
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g yarn

# Copy the application files into the container
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install JavaScript dependencies and build assets
RUN yarn && yarn prod

# Generate the Laravel application key
RUN php artisan key:generate

# Clear cache
RUN php artisan optimize:clear

# Create a symbolic link for storage
RUN php artisan storage:link

# Run database migrations
RUN php artisan migrate --force

# Expose port 8000 for the application
EXPOSE 8000

# Start the Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]