<x-base>
    <div class="card">
        <img src="{{ asset('img/horse.jpeg') }}" class="horse-img" alt="Lorem ipsum dolor sit amet consectetur" />

        <h2>Thank you for joining our campaign</h2>

        <p>Enim in praesent cras eu purus sed proin orci fermentum. Eget urna dui diam venenatis. Arcu a sagittis habitant placerat nisi consequat enim aenean eleifend.</p>

        <a class="share-btn" href="#">Share on Facebook</a>
        <a class="share-btn" href="https://wa.me/?text={{ urlencode('I’ve just written to ' . $mp->name) }}">Share on WhatsApp</a>
        <a class="share-btn" href="#">Share on X</a>
    </div>
</x-base>

