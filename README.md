# Recruitment test

This is an example project to be used during C6 technical interviews - it contains:

- A starter Laravel 11 application
- Health data for English parliamentary constituencies (we don't have data for Scotland, Wales or Northern Ireland)

An example client has asked C6 to build a website where users can enter their postcode and see the number of people who are suffering from Depression in their local area.

We don't have a full brief or designs yet - we are still in the discovery phase.  We want to start off with a very simple prototype so we can "have a play".

## Tasks

1. Setup the application locally and get it working
2. Build a prototype that allows users to enter a postcode and see the depression stats in their constituency
- Use the [postcodes.io](https://postcodes.io/) API to get the UK parliamentary constituency from the postcode
- Use the UK parliamentary constituency to get the depression stats (`App\Models\HealthCondition`)
- Display the depression stats on a results page
- Add a share button that allows users to share their local stats via WhatsApp, with the data [pre-filled in the message](https://faq.whatsapp.com/5913398998672934#create-your-own-link-with-a-pre-filled-message)

Some general notes:

- This is supposed to be a simple prototype - we're not looking for production-ready code or a pixel perfect UI.
- Feel free to build this in any way you want
- Use whatever tools you would use in a real project (Google, AI, etc.)

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
