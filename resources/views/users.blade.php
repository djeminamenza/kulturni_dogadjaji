@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ 'Users' }} {{ ' svi moguci juzeri' }}</h2>
            </div>

            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <th>Ime</th>
                        <th>email</th>
                        <th>kreiran</th>
                        <th>prebaci u org</th>
                        <th>admin li je?</th>
                    </tr>

                    @foreach ($users as $u)
                        <tr>
                            <td> {{ $u->id }}</td>
                            <td> {{ $u->name }}</td>
                            <td> {{ $u->email }}</td>
                            <td> {{ $u->created_at }} </td>
                            <td><button type='button' class='btn btn-success'> <a
                                        href="{{ url('makeMeAnAdmin', ['id'=>$u->id] )}}">Move</a></button></td>
                            <td> {{ $u->is_admin }} </td>

                        </tr>
                    @endforeach

                </table>
            </div>

        </div>
    </div>
@endsection
