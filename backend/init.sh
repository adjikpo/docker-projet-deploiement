#!/bin/bash
set -e 
php /var/www/html/bin/console doctrine:migrations:migrate --force
eval "/usr/local/bin/docker-php-entrypoint $@"

