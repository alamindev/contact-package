@component('mail::message') Name: {{ $name }}
<br> description : {{ $message }} @component('mail::button', ['url' => '']) Button Text @endcomponent Thanks,

<br> {{ config('app.name') }} @endcomponent