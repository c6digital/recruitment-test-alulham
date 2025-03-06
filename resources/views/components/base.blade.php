<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lorem ipsum dolor sit amet consectetur</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script defer data-domain="recruitment-test-alulham.c6digital.dev" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <header class="mb-4">
        <div class="container">
            <h1>World Horse Welfare</h1>

            @if (session('errorMsg'))
            <div class="alert alert-danger" role="alert">
                Error: {{ session('errorMsg') }}
            </div>
            @endif
        </div>
    </header>

    <main>
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    <footer class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    © World Horse Welfare<br>
                    Registered charity no: 206658 and SC038384
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img alt="Registered with Fundraising Regulator" src="" />
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
