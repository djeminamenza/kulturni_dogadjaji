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
                            <td> {{ $e->starting_date }}</td>
                            <td> {{ $e->ending_date}}</td>
                            <td> {{ $e->name }}</td>
                            <td> {{ $e->categ }} </td>
                            <td> {{ $e->ages }}</td>
                            <td> {{ $e->description }}</td>

                        </tr>
                    @endforeach

                </table>
            </div>


    </div>
@endsection

@section('footer')
@stop
