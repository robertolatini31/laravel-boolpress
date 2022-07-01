@component('mail::message')

<h3>{{$message->full_name}} il tuo messaggio è stato ricevuto!</h3>
<strong>Subject:</strong> {{$message->subject}} <br>
<strong>Message:</strong>
<p>
    {{$message->message}}
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent