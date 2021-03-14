@extends('layouts/app')



@section('content')
      
      <img src="{{ asset('/img/IcelandFlagMap.png') }}" alt="Iceland Flag" class="h-32 rounded shadow-md">

      <h1 class="mt-5 text-4xl sm:text-5xl text-indigo-600 font-semibold">Hello from Iceland!</h1>

      <p class="text-lg text-gray-500 dark:text-gray-300 ">It's currently {{ date('h:i A') }}</p>
      
@endsection