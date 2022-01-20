@extends('layout')
@section('head')
@section('title')
    Kulturni dogadjaji
@stop
@section('heading')

    <div class="container">
        <div class="row">
            <h2 class="col-10 col-s-12">{{ 'Najnovije ' }} {{ ' vesti o predstojećim dešavanjima' }}</h2>
            <button type='button' class='btn btn-light shadow col-2 col-s-12' style="background-color:#20cb9c">
                <a class="nav-link" href="{{ route('add.new.Tiding') }}">{{ __('Add new tiding') }}</a>
            </button>
        </div>
    </div>
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
                            <div class="col-xl-6 col-sm-12">{{"Autor: ".$t->id_user }}  </div>
                            <div class="col-xl-3 col-sm-12">

                                @if ($t->delete_request==0)



                                <button type="submit"
                                  onclick="return confirm('Are you sure?')"
                                  class="btn btn-sm btn-fill btn-danger">
                                    <a class="nav-link" href="{{ route('remove.Tiding.request', ['id'=>$t->id])}}">{{ __('Remove') }}</a>
                                </button>


                             {{-- <button type='button' class='btn btn-light shadow' style="background-color:#cb2029">
                                  {{ __('Delete') }}
                                    </button> --}}
                                @else
                                    <button type='button disabled' class='btn btn-light shadow' style="background-color:#706868">
                                    {{ __('Delete request sent') }}
                                    </button>

                                @endif






                            </div>
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
