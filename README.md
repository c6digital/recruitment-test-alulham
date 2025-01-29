# Skeleton

A starter template for developing new Laravel apps for The Labour Party.

* MapIt
* Organise
* A bunch of Heroku specific functions

## Built by C6 for Labour

This project was built by [C6 Digital](https://c6digital.io/) for The Labour Party.

For any questions please contact: hello@c6digital.io

## Installation

1. Clone repository.
2. Install dependencies.

```sh
composer install
npm ci
```

3. Create `.env`

```sh
cp .env.example .env
```

4. Generate `APP_KEY`

```sh
php artisan key:generate
```

5. Run migrations

```sh
php artisan migrate
```

6. Open app!

## Assets

```
npm run dev   # Local build, watches for changes and hot reloads.
npm run build # Production build, commit to repo.
```