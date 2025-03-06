<x-base>
    @if (session('errorMsg'))
        <div class="alert alert-danger" role="alert">
            Error: {{ session('errorMsg') }}
        </div>
    @endif

    {{-- <h1>Lorem ipsum dolor sit amet consectetur</h1> --}}

    <h1>Lorem ipsum dolor sit amet consectetur</h1>

    <img src="" alt="Horse" />

    <p>Lorem ipsum dolor sit amet consectetur. Convallis ac nisl ut curabitur dui lorem. Vulputate sit eu elit aliquam blandit. Sagittis purus ut sed duis urna imperdiet. Habitant ac in nisl turpis eu amet vitae laoreet sit. Risus ut diam augue fames posuere. Vulputate viverra ullamcorper adipiscing quisque at. Natoque adipiscing ut dui arcu scelerisque tempus augue.</p>

    <p>Donec aliquet lacus eleifend tristique et. Nunc id sed tincidunt in rutrum. Venenatis diam elit euismod ut maecenas pulvinar quis. Nisl faucibus in mi neque convallis pharetra. Lacus arcu leo morbi nunc tincidunt vel ut dis. Suspendisse etiam dui vivamus eu sed. Duis senectus enim nunc felis dui elementum tempor. Id morbi metus egestas elementum at etiam sollicitudin sit. Felis quam et faucibus nisl eleifend cras arcu. Eget a lectus lorem volutpat. Diam maecenas blandit lobortis facilisis penatibus pellentesque eget. Eu diam nulla blandit sed.</p>

    <p>Enter your postcode below to get started</p>

    <form method="POST" action="{{ route('postcode.lookup') }}">
        @csrf
        <label for="postcode">Postcode:</label>
        <input type="text" name="postcode" autofocus style="text-transform:uppercase" />
        <input type="submit" value="Find my MP" />
    </form>
</x-base>
