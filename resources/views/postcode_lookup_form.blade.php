<x-base>
    <div class="lookup-cols">
        <div class="intro-col">
            <div class="panel">
                <h1 class="title-block">Lorem ipsum dolor sit amet consectetur</h1>
            </div>

            <div class="panel">
                <h2 class="my-0">Lorem ipsum dolor sit amet consectetur</h2>
            </div>

            <div class="panel">
                <img src="{{ asset('img/horse.jpeg') }}" class="horse-img" alt="Lorem ipsum dolor sit amet consectetur" />
            </div>

            <div class="panel">
                <p>Lorem ipsum dolor sit amet consectetur. Convallis ac nisl ut curabitur dui lorem. Vulputate sit eu elit aliquam blandit. Sagittis purus ut sed duis urna imperdiet. Habitant ac in nisl turpis eu amet vitae laoreet sit. Risus ut diam augue fames posuere. Vulputate viverra ullamcorper adipiscing quisque at. Natoque adipiscing ut dui arcu scelerisque tempus augue.</p>

                <p>
                    <a href="#" class="read-more">Read more<span style="background-image: url({{ asset('img/read-more.svg') }})"></span></a>
                </p>
            </div>
        </div>

        <div>
            <div class="card">
                <form method="POST" action="{{ route('postcode.lookup') }}">
                    @csrf
                    <div class="panel">
                        <h2 class="title-block">Find your MP</h2>
                        <hr>
                        <p>Enter your postcode below to get started</p>
                    </div>

                    <label for="postcode">Postcode<span class="required">*</span></label>
                    <input type="text" name="postcode" autofocus class="form-control text-uppercase" />
                    <button type="submit" class="form-control">Find my MP</button>
                </form>
            </div>
        </div>
    </div>
</x-base>
