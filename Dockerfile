FROM rossedlin/php-apache:7.4

ADD ./ /var/www

RUN chmod 777 -R /var/www/storage
