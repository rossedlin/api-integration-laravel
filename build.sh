#!/usr/bin/env bash

#
# Start
#
docker compose down
docker compose up -d

#
# Composer
#
#rm -R vendor
docker exec -it api-integration-laravel-web-1 composer install

#
# NPM
#
#rm -R node_modules
docker exec -it api-integration-laravel-web-1 yarn install
docker exec -it api-integration-laravel-web-1 yarn prod

#
# Environment File
#
docker exec -it api-integration-laravel-web-1 php -r "file_exists('.env') || copy('.env.example', '.env');"
docker exec -it api-integration-laravel-web-1 php artisan key:generate


#
# End
#
docker compose down
