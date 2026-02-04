#!/bin/bash
set -e

# Create .env if not exists
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Cache Laravel configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force

# Change Apache port to use Render's $PORT
if [ -n "$PORT" ]; then
    sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
    sed -i "s/:80/:$PORT/g" /etc/apache2/sites-available/000-default.conf
fi

# Start Apache
apache2-foreground
