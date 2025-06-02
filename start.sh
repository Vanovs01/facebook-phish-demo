#!/bin/sh

# Start PHP-FPM in the background (-D flag)
php-fpm -D

# Start Nginx in the foreground
nginx -g "daemon off;"
