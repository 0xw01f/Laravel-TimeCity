@extends('app')

@section('title', 'About us | ' . config('app.name'))


@section('content')
    

    <p>Built with &hearts; by W01f.</p>

    <p><a href="{{ route('home')}}"> Go to homepage </a></p>
    

@endsection
