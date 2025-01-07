# Use an official PHP 8.2 image as the base image
FROM php:8.2-cli

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

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy .env.example to .env if .env does not exist
RUN if [ ! -f .env ]; then cp .env.example .env; fi

# Generate the Laravel application key
RUN php artisan key:generate

# Install Node.js 18 and Yarn
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g yarn

# Remove package-lock.json to avoid conflicts with Yarn
RUN rm -f package-lock.json

# Install JavaScript dependencies and build assets
RUN yarn install && yarn build

# Clear cache
# RUN php artisan optimize:clear

# Create a symbolic link for storage
RUN php artisan storage:link

# Run database migrations
RUN php artisan migrate --force

# Expose port 8000 for the application
EXPOSE 8000

# Start the Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
