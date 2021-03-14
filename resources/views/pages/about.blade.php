@extends('layouts/app', ['title' => 'About me'])



@section('content')
    
    <img src="{{ asset('/img/w01f-logo.png') }}" alt="W01f logo" class="h-64 my-12 rounded-full shadow-md">

    <h2 class="mb-5 text-gray-500 dark:text-gray-300">Built with <span class="text-pink-500">&hearts;</span> by W01f.</h2>

    <p><a href="{{ route('home')}}" class="text-indigo-500 hover:text-indigo-600"> Go to homepage </a></p>
    

@endsection
