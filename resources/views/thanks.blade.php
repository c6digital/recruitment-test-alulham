<x-base>
    <div class="card">
        <div class="panel">
            <div class="progress-bar progress-bar-done">
                <span class="step step-complete" style="background-image: url({{ asset('img/step-complete.svg') }})"></span>
            </div>
            <div class="progress-bar-labels progress-bar-done">
                <span>Email Sent</span>
            </div>
        </div>
        <div class="panel">
            <img src="{{ asset('img/horse.jpeg') }}" class="horse-img" alt="Lorem ipsum dolor sit amet consectetur" />
        </div>

        <div class="panel">
            <h2>Thank you for joining our campaign</h2>
            <p>Enim in praesent cras eu purus sed proin orci fermentum. Eget urna dui diam venenatis. Arcu a sagittis habitant placerat nisi consequat enim aenean eleifend.</p>
        </div>

        <div class="share-btns">
            <a class="share-btn facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('postcode.show')) }}">Share on Facebook</a>
            <a class="share-btn whatsapp" href="https://wa.me/?text={{ urlencode('I’ve just written to ' . $mp->name) }}">Share on WhatsApp</a>
            <a class="share-btn x" href="https://x.com/intent/post?text={{ urlencode('I’ve just written to ' . $mp->name) }}">Share on X</a>
        </div>
    </div>
</x-base>

