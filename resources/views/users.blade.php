@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-8 mt-5">
            <h2 style="text-align: center; margin-bottom: 3%; font-size: 3em;">{{ 'Spisak korisnika' }}</h2>
        </div>
        @if(!session('message')=='')
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <th>kreiran</th>
                    <th>Ime</th>
                    <th>email</th>
                    <th>uloga</th>
                    <th>prebaci u admine</th>
                    <th>izmenjen</th>
                </tr>
                @foreach ($users as $u)
                    <tr>
                        <td> {{ $u->created_at }}</td>
                        <td> {{ $u->name }}</td>
                        <td> {{ $u->email }}</td>
                        <td> {{ $u->role }} </td>
                        <td>
                            @if ($u->role != 'Admin')
                                <button type='button' class='btn btn-light shadow' style="background-color:#20cb9c">
                                    <a href="{{ route('make.Admin', [$u->id]) }}">{{ __('Make') }}</a>
                                </button>
                            @endif
                        </td>
                        <td>
                            {{ $u->updated_at }}
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
