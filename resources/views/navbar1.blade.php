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

  <a class="nav-link btn btn mb-1 shadow" style="width: 150px;" href="{{ route('a.add_ads') }}">{{ __('Add Advertisments') }}</a>
  <a class="nav-link btn btn mb-1 shadow" style="width: 150px" href="{{ route('a.add_event') }}">{{ __('Add Event') }}</a>
  <a class="nav-link btn btn mb-1 shadow" style="width: 150px" href="{{ route('a.profile') }}">{{ __('Profile') }}</a>
  <a class="nav-link btn btn mb-1 shadow" style="width: 150px" href="{{ route('a.survey') }}">{{ __('Add survey') }}</a>
  <a class="nav-link btn btn mb-1 shadow" style="width: 150px" href="{{ route('a.survey_result') }}">{{ __('Surveys results') }}</a>
</nav>
</div>
      
</body>
</html>
