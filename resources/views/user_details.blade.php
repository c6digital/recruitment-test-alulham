<x-base>
    <h1>Email {{ $mp->name }}</h1>

    <p>Enim in praesent cras eu purus sed proin orci fermentum. Eget urna dui diam venenatis. Arcu a sagittis habitant placerat nisi consequat enim aenean eleifend.</p>

    <form method="POST" action="{{ route('mp.send_email', $mp->id) }}">
        @csrf

        <input type="hidden" name="message" value="{{ $message }}" />


        <label for="first_name">First name</label>
        <input type="text" name="first_name" required />

        <label for="last_name">Last name</label>
        <input type="text" name="last_name" required />

        <label for="email">Email address</label>
        <input type="email" name="email" required />

        <label for="phone">Phone number</label>
        <input type="tel" name="phone" required />

        <p>Would you like to receive emails from us with news and updates about our work and fundraising? If you already receive our emails, choosing ‘Yes’ will mean this continues. You can opt out at any time, we promise.*</p>
        <p>Opt in</p>
        <p>Are you sure? If you don't tick yes, we won't be able to keep you updated on this campaign and all our work and fundraising. You can opt out at any time, promise.</p>

        <input type="submit" value="Send my email" />

        <p>World Horse Welfare may process your data and enhance the details given by using publicly available information to help inform our fundraising or charitable activities, enabling us to help more horses.</p>

        <p>World Horse Welfare values our supporters and guarantees that your details will never be shared with third parties for marketing purposes. Please visit www.worldhorsewelfare.org/privacy for more information.</p>

        <p>If you would ever like to change the way you hear from World Horse Welfare or change how we process your data, please call +44(0)1953 497239 or email <a href="mailto:info@worldhorsewelfare.org">info@worldhorsewelfare.org</a></p>
    </form>
</x-base>
