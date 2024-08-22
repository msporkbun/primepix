setup: remove install start

remove: remove-composer remove-npm

install: install-composer install-npm

start: start-vite start-php

install-composer:
	composer install

install-npm:
	npm install

start-vite:
	npm run dev &

start-php:
	php artisan serve &

remove-composer:
	rm -rf vendor

remove-npm:
	rm -rf node_modules
