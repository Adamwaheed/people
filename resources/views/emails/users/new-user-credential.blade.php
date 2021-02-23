@component('mail::message')
# Here is New User credential

<p>{{$user->name}}</p><br>
<p>{{$user->email}}</p><br>
<p>{{$passwordl}}</p><br>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
