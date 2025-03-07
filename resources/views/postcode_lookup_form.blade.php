<x-base>
    <div class="lookup-cols">
        <div class="intro-col">
            <div class="panel">
                <h1 class="title-block">Email your MP!</h1>
            </div>

            <div class="panel">
                <h2 class="my-0">Make sure horse smuggling is on the radar of the UK Government.</h2>
            </div>

            <div class="panel">
                <img src="{{ asset('img/horse.jpeg') }}" class="horse-img" alt="Lorem ipsum dolor sit amet consectetur" />
            </div>

            <div class="panel">
                <p>Every year, thousands of horses are subjected to long and gruelling journeys across the UK and Europe, forced to experience awful conditions, as they are smuggled towards an unknown fate.</p>

                <p class="hidden">We need MPs to speak up for these vulnerable horses in the UK Parliament. They have the power to introduce new laws and ensure enforcement agencies are given the resources needed to help put a stop to this abhorrent trade.</p>

                <p class="hidden">Most MPs will know about puppy smuggling, but the vast majority will never have heard that horses can be illegally moved across borders. It’s time to shine a spotlight on the suffering that horses are enduring too.</p>

                <p class="hidden">Email your MP today and tell them to speak out against horse smuggling. It takes just a few minutes to send an email and it could make a lifetime of difference to the horses, ponies and donkeys that may end up caught in this cruel trade.</p>

                <p>
                    <a href="#" id="read-more" class="read-more">Read more<span style="background-image: url({{ asset('img/read-more.svg') }})"></span></a>
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
                    @if (session('postcode_error'))
                    <div class="validation-error">{{ session('postcode_error') }}</div>
                    @endif
                    <input type="text" name="postcode" autofocus class="form-control text-uppercase" />
                    <button type="submit" class="form-control">Find my MP</button>
                </form>
            </div>
        </div>
    </div>
</x-base>
