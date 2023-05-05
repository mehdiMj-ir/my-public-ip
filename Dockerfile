FROM php:8.2-apache
RUN a2enmod remoteip
COPY ./index.php .
CMD ["apache2-foreground"]
