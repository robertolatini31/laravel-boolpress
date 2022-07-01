@component('mail::message')

<h3>Hai ricevuto un messaggio da: {{$message->full_name}}</h3>
<strong>Subject:</strong> {{$message->subject}} <br>
<strong>Message:</strong>
<p>
    {{$message->message}}
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
