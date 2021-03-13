@extends('app')

@section('title', 'About us | ' . config('app.name'))


@section('content')
    
    <img src="{{ asset('/img/w01f-logo.png') }}" alt="W01f logo" class="h-64 my-12 rounded-full shadow-md">

    <h2 class="mb-5 text-grey-700">Built with <span class="text-pink-500">&hearts;</span> by W01f.</h2>

    <p><a href="{{ route('home')}}" class="text-indigo-500 hover:text-indigo-600"> Go to homepage </a></p>
    

@endsection
