<x-base>
    <div class="card">
        <form method="POST" action="{{ route('mp.save_message', $mp->id) }}">
            @csrf
            <div class="panel">
                <div class="progress-bar">
                    <span class="step" style="background-image: url({{ asset('img/step-complete.svg') }})"></span>
                    <span class="stroke"></span>
                    <span class="step" style="background-image: url({{ asset('img/step-todo.svg') }})"></span>
                    <span class="stroke disabled"></span>
                    <span class="step" style="background-image: url({{ asset('img/step-todo-disabled.svg') }})"></span>
                </div>
                <div class="progress-bar-labels">
                    <span>Find</span>
                    <span>Message</span>
                    <span class="disabled">Send</span>
                </div>
            </div>
            <div class="panel">
                <h2 class="my-0">Write to {{ $mp->name }}</h2>
            </div>
            <div class="mp-bio panel">
                <img src="{{ $mp->photo }}" class="rounded-full mp-img" alt="{{ $mp->name }}" />
                <dl>
                    <dd>{{ $mp->party }}</dd>
                    <dd>{{ $mp->pcon_name }}</dd>
                </dl>
            </div>
            <div class="panel">
                <p>You can personalise your email to your MP and include reasons about why this campaign is important to you. The more personalised your message, the more it will stand out and get noticed by your MP. Remember to be polite!</p>
            </div>

            <div class="panel">
                <textarea rows="10" name="message">Dear {{ $mp->name }}

I am writing to ask if you'll stand up for the thousands of UK horses, ponies and donkeys that are smuggled across borders in horrific conditions.

Horse smuggling is made all too easy by the current horse passport laws. Equines are nowhere near as traceable as livestock and the paper-based passport system means they can be given a new passport and inserted with a second microchip to match, to hide their past.

The ban on live exports to slaughter was a fantastic first step, but it needs to be enforceable and enforced. Will you commit to:
- Working to ensure that secondary legislation is passed to enforce the ban on live exports to slaughter, and that enforcement agencies are appropriately resourced
- Supporting the introduction of an improved equine identification and traceability system?

You can watch this film to learn more about the Dover 26: https://www.youtube.com/watch?v=Ztocoyq74sg&t=1s

If you would like to learn more about horse smuggling and what you can do to help the horses caught up in this trade, please contact Kim Ayling at World Horse Welfare (publicaffairs@worldhorsewelfare.org), who would be delighted to arrange a meeting.

I look forward to hearing from you.

Yours sincerely,</textarea>
            </div>

            <div class="panel">
                <p>Your name and address will be added to the end of this email.</p>
            </div>

            <button type="submit">Next</button>
        </form>
    </div>
</x-base>
