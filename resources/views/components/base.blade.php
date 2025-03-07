<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Make sure horse smuggling is on the radar of the new UK Government</title>
    <meta property="og:url" content="{{ route('postcode.show') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Make sure horse smuggling is on the radar of the new UK Government">
    <meta property="og:description" content="I have just emailed my MP to ask them to take action to #StopHorseSmuggling. Will you do the same? Each year thousands of horses, ponies and donkeys are smuggled across borders in horrific conditions, forced to endure long journeys in cramped vehicles with no access to food or water. The new UK Government needs to introduce laws that will help put a stop to this trade.">
    <meta property="og:image" content="{{ asset('img/share.jpg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer data-domain="recruitment-test-alulham.c6digital.dev" src="https://plausible.io/js/script.js"></script>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
</head>
<body>
    <header>
        <img alt="World Horse Welfare" srcset="{{ asset('img/logo-mob.png') }} 527w, {{ asset('img/logo.png') }} 500w" src="{{ asset('img/logo.png') }}" class="logo" sizes="(max-width: 767px) 379px, 218px" />
    </header>

    <main class="bg-bottom bg-repeat-x" style="background-image: url({{ asset('img/footer.png') }})">
        {{ $slot }}
    </main>

    <footer>
        <div class="footer-cols">
            <div class="text-center md:text-left">
                <p>© World Horse Welfare</p>
                <small>Registered charity no: 206658 and SC038384</small>
            </div>
            <img class="block footer-badge" alt="Registered with Fundraising Regulator" src="{{ asset('img/fundraising-regulator.png')  }}" />
        </div>
    </footer>
</body>
</html>
