# Usa una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instala extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Configura permisos y variables de entorno
ENV APACHE_DOCUMENT_ROOT=/var/www/html

# Copia el código de la aplicación al contenedor
COPY . /var/www/html/

# Da permisos correctos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Exponer el puerto 80
EXPOSE 80

# Arranca Apache
CMD ["apache2-foreground"]
