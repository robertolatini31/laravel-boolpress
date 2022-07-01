@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="bg-dark text-white rounded p-4">
        <strong>User:</strong> {{$message->full_name}} <br>
        <strong>Oggetto:</strong> {{$message->subject}} <br>
        <strong>Email:</strong> {{$message->email}}
        <p class="bg-secondary p-2 mt-3 rounded">
            <strong class="mr-2">Testo:</strong>
            <span>{{$message->message}}</span>
        </p>
    </div>
</div>
@endsection