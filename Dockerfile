FROM php:7.2-apache
LABEL authors="erick"
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
COPY index.php   /var/www/html/


#ENTRYPOINT ["top", "-b"]