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
            <a target="_blank" class="share-btn fb" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('postcode.show')) }}"><span class="share-icon fb" style="background-image: url({{ asset('img/fb.svg') }})"></span>Share on Facebook</a>
            <a target="_blank" class="share-btn wa" href="https://wa.me/?text={{ urlencode('I’ve just written to ' . $mp->name) }}"><span class="share-icon wa" style="background-image: url({{ asset('img/wa.svg') }})"></span>Share on WhatsApp</a>
            <a target="_blank" class="share-btn x" href="https://x.com/intent/post?text={{ urlencode('I’ve just written to ' . $mp->name) }}"><span class="share-icon x" style="background-image: url({{ asset('img/x.svg') }})"></span>Share on X</a>
        </div>
    </div>
</x-base>

