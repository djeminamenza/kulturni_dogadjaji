@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ 'Brisanje vesti' }}</h1>


    </div>

   <h2> Pristigli zahtevi za brisanje: </h2>

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


                    <button type="submit"
                      onclick="return confirm('Are you sure?')"
                      class="btn btn-sm btn-fill btn-danger">
                        <a class="nav-link" href="{{ route('remove.Tiding', ['id'=>$t->id])}}">{{ __('Delete tiding') }}</a>
                    </button>





                </div>
            </div>

        @endforeach

    </table>
</div>

@endsection
