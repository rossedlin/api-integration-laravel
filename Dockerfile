FROM rossedlin/php-apache:7.4-dev

ADD ./ /var/www

RUN composer install
RUN php -r "file_exists('.env') || copy('.env.example', '.env');"
RUN php artisan key:generate
RUN chmod 777 -R /var/www/storage
