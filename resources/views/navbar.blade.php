<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar1 flex-column navbar-light shadow mt-0 " style="background-color: #c7daed;">
        <div class="col-md-3">
    <nav >

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
      
</body>
</html>
