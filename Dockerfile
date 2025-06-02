# Use a more comprehensive PHP-FPM image as our base
FROM php:8.3-fpm-alpine

# Install Nginx and other necessary tools
# We use --no-cache to keep the image size down
RUN apk add --no-cache nginx

# Create directories for Nginx logs
RUN mkdir -p /var/log/nginx \
    && touch /var/log/nginx/access.log \
    && touch /var/log/nginx/error.log

# Set the working directory to where your web files will be served from
WORKDIR /var/www/html

# Remove default Nginx config and copy your custom Nginx config
# Make sure your local nginx.conf is in the same directory as your Dockerfile
COPY nginx.conf /etc/nginx/nginx.conf

# Copy your application files to the webroot
COPY . /var/www/html

# Ensure correct permissions for PHP-FPM and Nginx to read/write files
# This might help with any permission issues
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 for Nginx (standard HTTP port)
EXPOSE 80

# Command to run Nginx in the foreground and PHP-FPM
# We use a custom shell script to start both processes
CMD ["/bin/sh", "-c", "php-fpm && nginx -g 'daemon off;'"]
