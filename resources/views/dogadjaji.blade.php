@extends('layout')
@section('head')

@section('title')
    Kulturni dogadjaji
@stop
@stop



@section('content')
    <div class="container">

            {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
            <div class="col">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Naziv</th>
                        <th>Kreiran</th>
                        <th>Azuriran</th>
                        <th>Pocinje</th>
                        <th>Zavrsava se</th>
                        <th>Grad</th>
                        <th>Kategorija</th>
                        <th>Uzrast</th>
                        <th>Mesto</th>
                    </tr>

                    @foreach ($events as $e)
                        <tr>
                            <td> {{ $e->id }}</td>
                            <td> {{ $e->name }}</td>
                            <td> {{ $e->created_at }}</td>
                            <td> {{ $e->updated_at }} </td>
                            <td> {{ $e->starting_date }}</td>
                            <td> {{ $e->ending_date}}</td>
                            <td> {{ $e->id_city }}</td>
                            <td> {{ $e->id_category }} </td>
                            <td> {{ $e->id_years }}</td>
                            <td> {{ $e->id_place }}</td>

                        </tr>
                    @endforeach

                </table>
            </div>


    </div>
@endsection

@section('footer')
@stop
