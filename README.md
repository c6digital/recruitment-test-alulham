# Recruitment test

This is an example project to be used during recruiting interviews.

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

6. Import health data

```sh
php artisan import:health-conditions
```

7. Open app!

## Assets

```
npm run dev   # Local build, watches for changes and hot reloads.
npm run build # Production build, commit to repo.
```
