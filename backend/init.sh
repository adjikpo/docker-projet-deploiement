#!/bin/bash
set -e 
php /var/www/html/bin/console doctrine:migrations:migrate --all-or-nothing
eval "/usr/local/bin/docker-php-entrypoint $@"

