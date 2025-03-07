<x-base>
    <div class="card">
        <form method="POST" action="{{ route('mp.send_email', $mp->id) }}">
            @csrf

            <div class="panel">
                <div class="progress-bar">
                    <span class="step step-complete" style="background-image: url({{ asset('img/step-complete.svg') }})"></span>
                    <span class="stroke" style="background-image: url({{ asset('img/stroke.svg') }})"></span>
                    <span class="step step-complete" style="background-image: url({{ asset('img/step-complete.svg') }})"></span>
                    <span class="stroke" style="background-image: url({{ asset('img/stroke.svg') }})"></span>
                    <span class="step step-todo" style="background-image: url({{ asset('img/step-todo.svg') }})"></span>
                </div>
                <div class="progress-bar-labels">
                    <span>Find</span>
                    <span>Message</span>
                    <span>Send</span>
                </div>
            </div>

            <div class="panel">
                <h2>Email {{ $mp->name }}</h2>

                <p>Enim in praesent cras eu purus sed proin orci fermentum. Eget urna dui diam venenatis. Arcu a sagittis habitant placerat nisi consequat enim aenean eleifend.</p>
            </div>

            <div class="panel">
                <input type="hidden" name="message" value="{{ $message }}" />

                <div class="row">
                    <div class="col-md-6">
                        <label for="first_name">First name<span class="required">*</span></label>
                        <input class="form-control" type="text" name="first_name" required />
                    </div>
                    <div class="col-md-6">
                        <label for="last_name">Last name<span class="required">*</span></label>
                        <input class="form-control" type="text" name="last_name" required />
                    </div>
                </div>

                <label for="email">Email address<span class="required">*</span></label>
                <input class="form-control" type="email" name="email" required />

                <label for="phone">Phone number<span class="required">*</span></label>
                <input class="form-control" type="tel" name="phone" autocomplete="tel" required />
            </div>

            <div class="panel">
                <p>Would you like to receive emails from us with news and updates about our work and fundraising? If you already receive our emails, choosing ‘Yes’ will mean this continues. You can opt out at any time, we promise.<span class="required">*</span></p>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="mailing-list" id="opt-in">
                  <label class="form-check-label" for="opt-in">
                    <strong>Yes!</strong> I would like to receive email updates
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="mailing-list" id="opt-out" checked>
                  <label class="form-check-label" for="opt-out">
                    <strong>No</strong> thanks
                  </label>
                </div>

                <p class="notice" id="opt-out-notice">Are you sure? If you don't tick yes, we won't be able to keep you updated on this campaign and all our work and fundraising. You can opt out at any time, promise.</p>
            </div>

            <button type="submit" class="form-control">Send my email</button>

            <p>
                <small>World Horse Welfare may process your data and enhance the details given by using publicly available information to help inform our fundraising or charitable activities, enabling us to help more horses.</small>
            </p>

            <p>
                <small>World Horse Welfare values our supporters and guarantees that your details will never be shared with third parties for marketing purposes. Please visit <a target="_blank" href="https://www.worldhorsewelfare.org/privacy">www.worldhorsewelfare.org/privacy</a> for more information.</small>
            </p>

            <p>
                <small>If you would ever like to change the way you hear from World Horse Welfare or change how we process your data, please call +44(0)1953 497239 or email <a target="_blank" href="mailto:info@worldhorsewelfare.org">info@worldhorsewelfare.org</a></small>
            </p>
        </form>
    </div>
</x-base>
