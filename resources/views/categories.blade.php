@extends('layouts.app')
@section('content')

<div class="container">
        <h1>{{ 'Unos kategorija i izmene'}}</h1>
        @foreach ($data as $d)
        <p>
            {{-- ?=var_dump($d)?> --}}
            {{$d->groups_id}}
        </p>
        @endforeach

        </div>

@endsection

