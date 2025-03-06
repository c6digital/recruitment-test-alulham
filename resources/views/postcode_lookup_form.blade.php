<x-base>
    <div class="row">
        <div class="col-md-6">
            <h2>Lorem ipsum dolor sit amet consectetur</h2>

            <p>Lorem ipsum dolor sit amet consectetur</p>

            <img src="" alt="Horse" />

            <p>Lorem ipsum dolor sit amet consectetur. Convallis ac nisl ut curabitur dui lorem. Vulputate sit eu elit aliquam blandit. Sagittis purus ut sed duis urna imperdiet. Habitant ac in nisl turpis eu amet vitae laoreet sit. Risus ut diam augue fames posuere. Vulputate viverra ullamcorper adipiscing quisque at. Natoque adipiscing ut dui arcu scelerisque tempus augue.</p>

            <p>Donec aliquet lacus eleifend tristique et. Nunc id sed tincidunt in rutrum. Venenatis diam elit euismod ut maecenas pulvinar quis. Nisl faucibus in mi neque convallis pharetra. Lacus arcu leo morbi nunc tincidunt vel ut dis. Suspendisse etiam dui vivamus eu sed. Duis senectus enim nunc felis dui elementum tempor. Id morbi metus egestas elementum at etiam sollicitudin sit. Felis quam et faucibus nisl eleifend cras arcu. Eget a lectus lorem volutpat. Diam maecenas blandit lobortis facilisis penatibus pellentesque eget. Eu diam nulla blandit sed.</p>
        </div>

        <div class="col-md-6">
            <h2>Find your MP</h2>

            <hr>

            <p>Enter your postcode below to get started</p>

            <form class="row" method="POST" action="{{ route('postcode.lookup') }}">
                @csrf
                <div class="col-12 mb-3">
                    <label for="postcode" class="form-label">Postcode*</label>
                    <input type="text" name="postcode" autofocus class="form-control text-uppercase" />
                </div>
                <div class="col-12">
                    <button type="submit" class="text-uppercase btn btn-primary w-100">Find my MP</button>
                </div>
            </form>
        </div>
    </div>
</x-base>
