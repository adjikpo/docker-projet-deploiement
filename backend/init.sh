#!/bin/bash
set -e 
php /var/www/html/bin/console --no-interaction doctrine:migrations:migrate
eval "/usr/local/bin/docker-php-entrypoint $@"

