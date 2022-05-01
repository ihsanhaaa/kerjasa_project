@component('mail::message')
# Register Service: {{$checkout->Product->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->Product->title}}</b>, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
