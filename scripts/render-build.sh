#!/bin/bash
# Render.com Build Script for Laravel
# This script runs during deployment to set up the application

set -e  # Exit on error

echo "🚀 Starting Render build process..."

# ========================================
# 1. Install PHP Dependencies
# ========================================
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# ========================================
# 2. Install Node.js Dependencies & Build Assets
# ========================================
echo "📦 Installing Node.js dependencies..."
npm ci --prefer-offline

echo "🔨 Building frontend assets..."
npm run build

# ========================================
# 3. Laravel Setup
# ========================================
echo "⚙️ Configuring Laravel..."

# Create storage directories if they don't exist
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p bootstrap/cache

# Set proper permissions
chmod -R 775 storage bootstrap/cache

# Create .env from .env.example if not exists
if [ ! -f .env ]; then
    echo "📄 Creating .env file..."
    cp .env.example .env
fi

# Cache configuration for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# ========================================
# 4. Database Setup (SQLite)
# ========================================
echo "🗄️ Setting up database..."

# Create SQLite database file if not exists
if [ ! -f database/database.sqlite ]; then
    echo "📄 Creating SQLite database..."
    touch database/database.sqlite
fi

# Run migrations
php artisan migrate --force

echo "✅ Build completed successfully!"
