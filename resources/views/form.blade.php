<x-base>
    @if (session('errorMsg'))
        <div class="alert alert-danger" role="alert">
            Error: {{ session('errorMsg') }}
        </div>
    @endif

    <form method="POST" action="{{ route('health.results') }}">
        @csrf
        <label for="postcode">Enter your postcode:</label>
        <input type="text" name="postcode" placeholder="E.g. SW1A 1AA" autofocus />
        <button>Submit</button>
    </form>
</x-base>
