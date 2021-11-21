@extends('layout')
@section('head')
@section('title')
    Kulturni dogadjaji
@stop
@section('heading')
    <h2>{{ 'Najnovije ' }} {{ ' vesti o predstojećim dešavanjima' }}</h2>
@stop

@section('content')
    <div class="container">

            {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
            <div class="col">
                <table class="table">

                    @foreach ($tidings as $t)
                        <div class="row mt-5">
                            <div class="col-xl-3 col-sm-12">{{ $t->created_at }} </div>
                            <div class="col-xl-9 col-sm-12 h4">{{ $t->name }} </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-sm-12">{{ $t->id_category }} </div>
                            <div class="col-xl-9 col-sm-12">{{ $t->description }}  </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-sm-12"> </div>
                            <div class="col-xl-9 col-sm-12">{{"Autor: ".$t->id_user }}  </div>
                        </div>

                    @endforeach

                </table>
            </div>


    </div>
@endsection

@section('footer')
    <a href="https://laravel.bigcartel.com" class="ml-1 underline">
        Shop
    </a>


    <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
        Sponsor
    </a>
@stop
