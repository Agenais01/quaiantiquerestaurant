
FROM php:8.2-apache

# Activation du module rewrite d'Apache
RUN a2enmod rewrite

# Copie de l'ensemble du projet dans le dossier web d'Apache
COPY . /var/www/html/

# Configuration des permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80