@extends('layouts.admin')

@section('content')
<div class="container">
<table class="table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $message)
                <tr>
                    <td scope="row">{{$message->full_name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->subject}}</td>
                    <td>{{$message->message}}</td>
                </tr>
            @empty
                <td>No Messages Yet!</td>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
