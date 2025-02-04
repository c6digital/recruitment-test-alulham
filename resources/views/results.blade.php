<x-base>
    <p>Prevalence of depression in {{ $constituency_name }}: {{ $depression_prevalence }}%</p>

    <a href="https://wa.me/?text={{ urlencode('Prevalence of depression in ' . $constituency_name . ': ' . $depression_prevalence . '%') }}">Share on WhatsApp</a>
</x-base>
