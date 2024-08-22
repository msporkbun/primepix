# PrimePix - A Laravel Project

## Getting Started

If you have got everything installed then you may just run the make command.

```bash
make
```

## Otherwise, here is a step-by-step guide

- Install Homebrew

```shell
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

- Install PHP

```shell
brew install php@8.3
```

- Install DBngin

```shell
brew install --cask dbngin
```

- Install Composer

```shell
brew install composer
```

- Bootstrap a Laravel Project

```shell
composer create-project --prefer-dist laravel/laravel primepix
```

- Generate an application key

```shell
php artisan key:generate
```

- Install Valet

```shell
composer global require laravel/valet
valet install
```

- Link the Laravel Project

```shell
cd primepix
valet park
valet link primepix
```

- Get a secure URL for the Laravel Project

```shell
valet secure primepix
```

- Install node modules

```shell
npm install
```

- Build and run the frontend assets

```shell
npm run dev
```

- You can now check if it works on `http://locahost`

- If you wish to use PHP built-in server, you can run

```shell
php artisan serve
```

- You can now access the Laravel Project at `http://localhost:8000`

- If you wish to use Valet, you can run

```shell
valet open
```

- You can now access the Laravel Project at `https://primepix.test`

You'll notice that both the `http://localhost:8000` and `https://primepix.test` are the same. However, the latter is more secure and is the recommended way to access the Laravel Project.

- Let's create a database with DBngin and name it `primepix_db`

- Update the `.env` file

```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=primepix_db
DB_USERNAME=root
DB_PASSWORD=
```

- Install [tailwindcss for Laravel](https://tailwindcss.com/docs/guides/laravel)

```shell
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```

## Routes

- You can check the routes by running

```shell
php artisan route:list
```
