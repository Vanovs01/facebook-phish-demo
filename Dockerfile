# Use a lightweight PHP-CLI image as our base
# This image includes PHP and is suitable for running the built-in server.
FROM php:8.3-cli-alpine

# Set the working directory inside the container
# This is where your application files will reside within the Docker environment.
WORKDIR /app

# Copy all your application files from your local directory to the /app directory in the container
COPY . /app

# Expose the port that PHP's built-in server will listen on.
# Render will map its dynamically assigned $PORT to this exposed port (8000).
EXPOSE 8000

# Define the command to run when the container starts.
# This will start your PHP built-in web server.
CMD ["php", "-S", "0.0.0.0:8000", "-t", "."]
