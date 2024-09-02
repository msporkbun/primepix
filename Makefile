start: remove install build serve

################################
#            Serve             #
################################
build:
	npm run build

serve:
	php artisan serve

################################
#          Development         #
################################
dev: dev-vite dev-php

dev-vite:
	npm run dev &

dev-php:
	php artisan serve &

################################
#             Setup            #
################################
remove: remove-composer remove-npm
install: install-composer install-npm

install-composer:
	composer install

install-npm:
	npm install

remove-composer:
	rm -rf vendor

remove-npm:
	rm -rf node_modules
