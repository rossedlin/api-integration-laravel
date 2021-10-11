FROM rossedlin/php-apache:7.4-dev

ADD ./ /var/www

RUN composer install
RUN chmod 777 -R /var/www/storage
