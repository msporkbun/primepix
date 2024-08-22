setup: scripts install db start

install: install-composer install-npm

start: start-vite start-php

db: db-create db-migrate

scripts: scripts-chmod

scripts-chmod:
	chmod +x scripts/*

install-composer:
	composer install

install-npm:
	npm install

start-vite:
	npm run dev &

start-php:
	php artisan serve &

db-create:
	sh scripts/create_database.sh

db-migrate:
	php artisan migrate

