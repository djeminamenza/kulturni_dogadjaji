@extends('layouts.app')

@section('content')


<div class="container">
    
    
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in') }} {{ Auth::user()->name }} {{ __('and you are admin.') }}
                
            </div>
        </div>
    </div>
</div>
@endsection
