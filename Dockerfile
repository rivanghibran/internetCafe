# Base image: PHP 8.2 with FPM
FROM php:8.2-fpm

# Install system dependencies, including oniguruma for mbstring support
RUN apt-get update && apt-get install -y --no-install-recommends \
    nginx \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    libonig-dev \
    zip \
    unzip \
    gnupg \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
       pdo \
       pdo_mysql \
       mbstring \
       exif \
       pcntl \
       bcmath \
       gd \
       opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Node.js v20 and npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set Working Directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev --no-interaction --prefer-dist --ignore-platform-req=ext-intl --ignore-platform-req=ext-zip

# Install Node.js dependencies
RUN npm install

# Prepare Laravel directories and storage symlink
RUN php artisan storage:link \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Remove default Nginx configuration and add custom config
RUN rm /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default \
    && mv /var/www/html/docker/nginx/default.conf /etc/nginx/sites-available/default \
    && ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Expose port 80
EXPOSE 80

# Command to run PHP-FPM, Nginx, and npm run dev
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;' & npm run dev"]