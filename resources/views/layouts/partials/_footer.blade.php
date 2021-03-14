<footer>
    <p class="text-gray-400">
        &copy; Copyright {{ date('Y') }}
        @if (!Route::is('about'))
        &middot; <a class="text-indigo-500 hover:text-indigo-600" href="{{ route('about')}}">About</a>
        @endif
       
    </p>
  </footer>