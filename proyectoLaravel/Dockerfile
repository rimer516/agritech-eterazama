FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpq-dev \
    curl \
    && docker-php-ext-install pdo pdo_pgsql zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . /var/www/html

WORKDIR /var/www/html
RUN touch database/database.sqlite
RUN composer install --no-dev --optimize-autoloader
RUN php artisan migrate --force
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

RUN npm install
RUN npm run build

RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

EXPOSE 10000


CMD ["sh", "-c", "DB_FILE=\"${DB_DATABASE:-/var/www/html/database/database.sqlite}\"; mkdir -p \"$(dirname \"$DB_FILE\")\"; touch \"$DB_FILE\"; php artisan migrate --force && php artisan db:seed --class=AdminUserSeeder --force && exec php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
