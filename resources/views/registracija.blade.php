@extends('layout')
@section('head')
@section('title')
Kulturni dogadjaji
@stop
@section('heading')
<h2>{{'Registracija'}} {{''}}</h2>
@stop
@section('content')
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


                           
@stop
@section('footer')
<a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                           
                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
@stop