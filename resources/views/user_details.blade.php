<x-base>
    <div class="card">
        <form method="POST" action="{{ route('mp.send_email', $mp->id) }}">
            @csrf

            <div class="panel small-pad">
                <div class="progress-bar">
                    <span class="step" style="background-image: url({{ asset('img/step-complete.svg') }})"></span>
                    <span class="stroke"></span>
                    <span class="step" style="background-image: url({{ asset('img/step-complete.svg') }})"></span>
                    <span class="stroke"></span>
                    <span class="step" style="background-image: url({{ asset('img/step-todo.svg') }})"></span>
                </div>
                <div class="progress-bar-labels">
                    <span>Find</span>
                    <span>Message</span>
                    <span>Send</span>
                </div>
            </div>

            <div class="panel">
                <h2>Email {{ $mp->name }}</h2>

                <p>We will send the email on your behalf. Just fill in your name and email and we will also share your postcode, so that your MP knows that you live within their constituency and can respond to you.</p>
            </div>

            <div class="panel">
                <input type="hidden" name="message" value="{{ $message }}" />

                <div class="form-row">
                    <div class="form-control @error('first_name') invalid @enderror">
                        <label for="first_name">First name<span class="required">*</span></label>
                        @error('first_name')
                          <div class="validation-error">First name is a mandatory field</div>
                        @enderror
                        <input type="text" name="first_name" value="{{ old('first_name') }}" />
                    </div>
                    <div class="form-control @error('last_name') invalid @enderror">
                        <label for="last_name">Last name<span class="required">*</span></label>
                        @error('last_name')
                          <div class="validation-error">Last name is a mandatory field</div>
                        @enderror
                        <input type="text" name="last_name" value="{{ old('last_name') }}" />
                    </div>
                </div>

                <div class="form-control @error('email') invalid @enderror">
                    <label for="email">Email address<span class="required">*</span></label>
                    @error('email')
                      <div class="validation-error">Email address is a mandatory field</div>
                    @enderror
                    <input type="email" name="email" value="{{ old('email') }}" />
                </div>

                <div class="form-control @error('phone') invalid @enderror">
                    <label for="phone">Phone number<span class="required">*</span></label>
                    @error('phone')
                      <div class="validation-error">Phone number is a mandatory field</div>
                    @enderror
                    <input class="!mb-0" type="tel" name="phone" autocomplete="tel" value="{{ old('phone') }}" />
                </div>
            </div>

            <div class="panel">
                <div class="form-control @error('mailing-list') invalid @enderror">
                    <p class="radio-label">Would you like to receive emails from us with news and updates about our work and fundraising? If you already receive our emails, choosing ‘Yes’ will mean this continues. You can opt out at any time, we promise.<span class="required">*</span></p>

                    @error('mailing-list')
                      <div class="validation-error">Email updates is a mandatory field</div>
                    @enderror

                    <div class="form-check">
                      <input type="radio" name="mailing-list" value="yes" id="opt-in" {{ old('mailing-list') == 'yes' ? 'checked' : '' }}>
                      <label for="opt-in">
                        <strong>Yes!</strong> I would like to receive email updates
                      </label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="mailing-list" value="no" id="opt-out" {{ old('mailing-list') == 'no' ? 'checked' : '' }}>
                      <label for="opt-out">
                        <strong>No</strong> thanks
                      </label>
                    </div>
                </div>

                <p class="notice" id="opt-out-notice">Are you sure? If you don't tick yes, we won't be able to keep you updated on this campaign and all our work and fundraising. You can opt out at any time, promise.</p>

                <button type="submit">Send my email</button>
            </div>

            <div class="disclaimer">
                <p>World Horse Welfare may process your data and enhance the details given by using publicly available information to help inform our fundraising or charitable activities, enabling us to help more horses.</p>

                <p>World Horse Welfare values our supporters and guarantees that your details will never be shared with third parties for marketing purposes. Please visit <a target="_blank" href="https://www.worldhorsewelfare.org/privacy">www.worldhorsewelfare.org/privacy</a> for more information.</p>

                <p>If you would ever like to change the way you hear from World Horse Welfare or change how we process your data, please call +44(0)1953 497239 or email <a target="_blank" href="mailto:info@worldhorsewelfare.org">info@worldhorsewelfare.org</a></p>
            </div>
        </form>
    </div>
</x-base>
