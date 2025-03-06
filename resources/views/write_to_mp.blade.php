<x-base>
    <div class="card">
        <h2>Write to {{ $mp->name }}</h2>

        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-1">
                <img src="{{ $mp->photo }}" class="rounded-full mp-img" alt="{{ $mp->name }}" />
            </div>
            <div class="col-span-1">
                <dl>
                    <dd>{{ $mp->party }}</dd>
                    <dd>{{ $mp->pcon_name }}</dd>
                </dl>
            </div>
        </div>

        <p>You can personalise your email to your MP and include reasons about why this campaign is important to you. The more personalised your message, the more it will stand out and get noticed by your MP. Remember to be polite!</p>

        <form method="POST" action="{{ route('mp.save_message', $mp->id) }}">
            @csrf
            <textarea rows="10" class="form-control" name="message">Dear {{ $mp->name }},

    Lorem ipsum dolor sit amet consectetur. Id bibendum porta enim rhoncus. Elementum rutrum at et et a. Ligula sodales eleifend posuere a faucibus ullamcorper aliquet. Suspendisse et amet ultrices venenatis eget vel. Tristique est id risus massa. Sed ac sem montes maecenas arcu mus lorem malesuada tempus. Molestie ac sed felis sit ultricies maecenas eu. Integer tristique urna sociis facilisi diam. Id volutpat est diam eget volutpat non eu. Integer at lacus leo congue facilisis eget. Iaculis gravida sagittis semper id porttitor.</textarea>

            <p>Your name and address will be added to the end of this email.</p>

            <button type="submit" class="btn">Next</button>
        </form>
    </div>
</x-base>
