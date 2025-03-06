<x-base>
    <div class="card">
        <img src="{{ asset('img/horse.jpeg') }}" class="horse-img" alt="Lorem ipsum dolor sit amet consectetur" />

        <h2>Thank you for joining our campaign</h2>

        <p>Enim in praesent cras eu purus sed proin orci fermentum. Eget urna dui diam venenatis. Arcu a sagittis habitant placerat nisi consequat enim aenean eleifend.</p>

        <a href="#">Share on Facebook</a>
        <a href="https://wa.me/?text={{ urlencode('I’ve just written to ' . $mp->name) }}">Share on WhatsApp</a>
        <a href="#">Share on X</a>
    </div>
</x-base>

