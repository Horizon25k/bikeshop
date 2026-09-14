@component('mail::message')
{{-- Greeting --}}
# Hello!

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
@component('mail::button', ['url' => $actionUrl])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
Regards,<br>
{{ config('app.name') }}

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
If you're having trouble clicking the "{{ $actionText }}" button, copy and paste the URL below into your web browser:
<a href="{{ $actionUrl }}" style="word-break: break-all; overflow-wrap: break-word;">{{ $actionUrl }}</a>
@endslot
@endisset
@endcomponent