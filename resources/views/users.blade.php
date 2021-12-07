@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="col-md-8 mt-5">
                <h2 style="text-align: center; margin-bottom: 3%; font-size: 3em;">{{ 'Spisak korisnika' }}</h2>
            </div>
            {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <th>Ime</th>
                        <th>email</th>
                        <th>kreiran</th>
                        <th>prebaci u admine</th>
                        <th>admin li je?</th>
                    </tr>

                    @foreach ($users as $u)
                        <tr>
                            <td> {{ $u->id }}</td>
                            <td> {{ $u->name }}</td>
                            <td> {{ $u->email }}</td>
                            <td> {{ $u->created_at }} </td>
                            <td><button type='button' class='btn btn-light shadow' style="background-color:#20cb9c"> <a
                                {{-- href="{{ url('makeMeAnAdmin', ['id'=>$u->id] )}}">Make</a></button></td> --}}
                                {{-- href = 'makeMeAnAdmin/{{ $u->id }}'>Make</a></td> --}} class="nav-link"
                                href="{{ route('make.Admin', [$u->id]) }}">{{ __('Make') }}</a></button></td>
                            <td>
                                @if ($u->is_admin == 1)
                                    {{ 'DA' }}
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
    </div>
@endsection
