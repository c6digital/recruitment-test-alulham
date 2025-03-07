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
            <img src="{{ asset('img/horse.jpeg') }}" class="horse-img" />
        </div>

        <div class="panel">
            <h2>Will you help us spread the word?</h2>

            <p>Sharing this action with your friends will make a huge difference to persuade MPs and the UK Government to act to Stop Horse Smuggling. Every voice counts and sharing with just three more people will help build the momentum for change and ensure these vulnerable horses are given the protection they deserve.</p>
        </div>

        <div class="share-btns">
            <a target="_blank" class="share-btn fb" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('postcode.show')) }}"><span class="share-icon fb" style="background-image: url({{ asset('img/fb.svg') }})"></span>Share on Facebook</a>
            <a target="_blank" class="share-btn wa" href="https://wa.me/?text={{ urlencode('I have just emailed ' . $mp->name . ' to ask them to take action to #StopHorseSmuggling. Will you do the same? ' . route('postcode.show')) }}"><span class="share-icon wa" style="background-image: url({{ asset('img/wa.svg') }})"></span>Share on WhatsApp</a>
            <a target="_blank" class="share-btn x" href="https://x.com/intent/post?text={{ urlencode('I have just emailed ' . $mp->name . ' to ask them to take action to #StopHorseSmuggling. Will you do the same?') }}&url={{ urlencode(route('postcode.show')) }}"><span class="share-icon x" style="background-image: url({{ asset('img/x.svg') }})"></span>Share on X</a>
        </div>
    </div>
</x-base>

