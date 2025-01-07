# Use an official PHP image as the base image
FROM php:8.1-cli

# Set the working directory inside the container
WORKDIR /app

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql zip mbstring exif pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Clear Composer cache
RUN composer clear-cache

# Copy the application files into the container
COPY . .

# Remove existing composer.lock and vendor directory (if any)
RUN rm -rf composer.lock vendor

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node.js and Yarn
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g yarn

# Install JavaScript dependencies and build assets
RUN yarn install && yarn prod

# Generate the Laravel application key (if .env exists)
RUN if [ -f .env ]; then php artisan key:generate; fi

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