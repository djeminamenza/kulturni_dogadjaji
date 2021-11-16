<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dogadjaji') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Dogadjaji') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-md-2">
    <nav class="navbar flex-column navbar-light shadow mt-0 " style="background-color: #c7daed;">

  <a class="nav-link btn btn mb-1 shadow" style="width: 150px;" href="{{ route('get.Users') }}">{{ __('Users') }}</a>
  <a class="nav-link btn btn mb-1 shadow" style="width: 150px" href="{{ route('a.categories') }}">{{ __('Categories') }}</a>
  <a class="nav-link btn btn mb-1 shadow" style="width: 150px" href="{{ route('a.reports') }}">{{ __('Reports') }}</a>
  <a class="nav-link btn btn mb-1 shadow" style="width: 150px" href="{{ route('a.content') }}">{{ __('Content') }}</a>
  <a class="nav-link btn btn mb-1 shadow" style="width: 150px" href="{{ route('a.statistics') }}">{{ __('Statistics') }}</a>
  <div class="dropdown show dropright">
  <a class="btn btn mb-1 shadow dropdown-toggle" style="width: 150px" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Deleting
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="{{ route('a.deletingcontent') }}">Content</a>
    <a class="dropdown-item" href="{{ route('a.deletingnews') }}">News</a>
    <a class="dropdown-item" href="{{ route('a.deletingevents') }}">Events</a>
    <a class="dropdown-item" href="{{ route('a.deletingadverts') }}">Adverts</a>

  </div>
</div>
</nav>

</div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
