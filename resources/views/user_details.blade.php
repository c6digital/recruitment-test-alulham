<x-base>
    <h2>Email {{ $mp->name }}</h2>

    <p>Enim in praesent cras eu purus sed proin orci fermentum. Eget urna dui diam venenatis. Arcu a sagittis habitant placerat nisi consequat enim aenean eleifend.</p>

    <form method="POST" action="{{ route('mp.send_email', $mp->id) }}">
        @csrf

        <input type="hidden" name="message" value="{{ $message }}" />

        <div class="row">
            <div class="col-md-6">
                <label for="first_name">First name*</label>
                <input class="form-control" type="text" name="first_name" required />
            </div>
            <div class="col-md-6">
                <label for="last_name">Last name*</label>
                <input class="form-control" type="text" name="last_name" required />
            </div>
        </div>

        <label for="email">Email address*</label>
        <input class="form-control" type="email" name="email" required />

        <label for="phone">Phone number*</label>
        <input class="form-control" type="tel" name="phone" required />

        <p>Would you like to receive emails from us with news and updates about our work and fundraising? If you already receive our emails, choosing ‘Yes’ will mean this continues. You can opt out at any time, we promise.*</p>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="opt-in" id="opt-in-yes">
          <label class="form-check-label" for="opt-in-yes">
            <strong>Yes!</strong> I would like to receive email updates
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="opt-in" id="opt-in-no" checked>
          <label class="form-check-label" for="opt-in-no">
            <strong>No</strong> thanks
          </label>
        </div>

        <p class="d-none">Are you sure? If you don't tick yes, we won't be able to keep you updated on this campaign and all our work and fundraising. You can opt out at any time, promise.</p>

        <button type="submit" class="text-uppercase btn btn-primary w-100">Send my email</button>

        <p>
            <small>World Horse Welfare may process your data and enhance the details given by using publicly available information to help inform our fundraising or charitable activities, enabling us to help more horses.</small>
        </p>

        <p>
            <small>World Horse Welfare values our supporters and guarantees that your details will never be shared with third parties for marketing purposes. Please visit www.worldhorsewelfare.org/privacy for more information.</small>
        </p>

        <p>
            <small>If you would ever like to change the way you hear from World Horse Welfare or change how we process your data, please call +44(0)1953 497239 or email <a target="_blank" href="mailto:info@worldhorsewelfare.org">info@worldhorsewelfare.org</a></small>
        </p>
    </form>
</x-base>
