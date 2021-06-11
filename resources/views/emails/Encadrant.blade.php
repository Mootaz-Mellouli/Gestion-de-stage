@component('mail::message')
# Gestion des Stage - DSI22

We are happy to announce that your account has been added.


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
