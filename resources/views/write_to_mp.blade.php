<x-base>
    <div class="card">
        <form method="POST" action="{{ route('mp.save_message', $mp->id) }}">
            @csrf
            <div class="panel">
                <div class="progress-bar">
                    <span class="step step-complete" style="background-image: url({{ asset('img/step-complete.svg') }})"></span>
                    <span class="stroke"></span>
                    <span class="step step-todo" style="background-image: url({{ asset('img/step-todo.svg') }})"></span>
                    <span class="stroke disabled"></span>
                    <span class="step step-todo" style="background-image: url({{ asset('img/step-todo-disabled.svg') }})"></span>
                </div>
                <div class="progress-bar-labels">
                    <span>Find</span>
                    <span>Message</span>
                    <span class="disabled">Send</span>
                </div>
            </div>
            <div class="panel">
                <h2>Write to {{ $mp->name }}</h2>
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
                <textarea rows="10" class="form-control" name="message">Dear {{ $mp->name }},

Lorem ipsum dolor sit amet consectetur. Id bibendum porta enim rhoncus. Elementum rutrum at et et a. Ligula sodales eleifend posuere a faucibus ullamcorper aliquet. Suspendisse et amet ultrices venenatis eget vel. Tristique est id risus massa. Sed ac sem montes maecenas arcu mus lorem malesuada tempus. Molestie ac sed felis sit ultricies maecenas eu. Integer tristique urna sociis facilisi diam. Id volutpat est diam eget volutpat non eu. Integer at lacus leo congue facilisis eget. Iaculis gravida sagittis semper id porttitor.</textarea>
            </div>

            <div class="panel">
                <p>Your name and address will be added to the end of this email.</p>
            </div>

            <button type="submit" class="form-control">Next</button>
        </form>
    </div>
</x-base>
