@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="buttons text-center">
                <a href="/" class="btn btn-success">Home Page</a>
                <a href="{{route('Dashboard')}}" class="btn btn-dark">Dashboard</a>
            </div>
        </div>
    </div>
</div>
@endsection
