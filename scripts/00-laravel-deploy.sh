#!/usr/bin/env bash
set -o errexit

composer install --no-dev --working-dir=/var/www/html

php artisan config:clear
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
