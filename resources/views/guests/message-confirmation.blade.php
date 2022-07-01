@extends('layouts.app')

@section('content')

<div class="container p-5">

@if (session('message'))
        <div class="bg-dark text-white rounded p-5">
            <h1 class="text-center">{{session('message')}}</h1>
            <hr class="bg-white">
            <a class="btn btn-primary" href="/">Home</a>
        </div>
@endif



</div>


@endsection