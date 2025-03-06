<x-base>
    <div class="grid grid-cols-2 gap-4">
        <div class="col-span-full md:col-span-1">
            <h1 class="title-block">Lorem ipsum dolor sit amet consectetur</h1>

            <h2>Lorem ipsum dolor sit amet consectetur</h2>

            <img src="{{ asset('img/horse.jpeg') }}" class="horse-img" alt="Lorem ipsum dolor sit amet consectetur" />

            <p>Lorem ipsum dolor sit amet consectetur. Convallis ac nisl ut curabitur dui lorem. Vulputate sit eu elit aliquam blandit. Sagittis purus ut sed duis urna imperdiet. Habitant ac in nisl turpis eu amet vitae laoreet sit. Risus ut diam augue fames posuere. Vulputate viverra ullamcorper adipiscing quisque at. Natoque adipiscing ut dui arcu scelerisque tempus augue.</p>

            <p>Donec aliquet lacus eleifend tristique et. Nunc id sed tincidunt in rutrum. Venenatis diam elit euismod ut maecenas pulvinar quis. Nisl faucibus in mi neque convallis pharetra. Lacus arcu leo morbi nunc tincidunt vel ut dis. Suspendisse etiam dui vivamus eu sed. Duis senectus enim nunc felis dui elementum tempor. Id morbi metus egestas elementum at etiam sollicitudin sit. Felis quam et faucibus nisl eleifend cras arcu. Eget a lectus lorem volutpat. Diam maecenas blandit lobortis facilisis penatibus pellentesque eget. Eu diam nulla blandit sed.</p>
        </div>

        <div class="col-span-full md:col-span-1">
            <div class="card">
                <h2 class="title-block">Find your MP</h2>

                <hr>

                <p>Enter your postcode below to get started</p>

                <form class="row" method="POST" action="{{ route('postcode.lookup') }}">
                    @csrf
                    <div class="col-12 mb-3">
                        <label for="postcode" class="form-label">Postcode*</label>
                        <input type="text" name="postcode" autofocus class="form-control text-uppercase" />
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn">Find my MP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-base>
