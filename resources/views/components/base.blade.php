<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email your MP! - World Horse Welfare</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer data-domain="recruitment-test-alulham.c6digital.dev" src="https://plausible.io/js/script.js"></script>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
</head>
<body>
    <header>
        <img alt="World Horse Welfare" srcset="{{ asset('img/logo-mob.png') }} 527w, {{ asset('img/logo.png') }} 500w" src="{{ asset('img/logo.png') }}" class="logo" sizes="(max-width: 767px) 379px, 218px" />

        @if (session('errorMsg'))
        <div class="alert alert-danger" role="alert">
            Error: {{ session('errorMsg') }}
        </div>
        @endif
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
