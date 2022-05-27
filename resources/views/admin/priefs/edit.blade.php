@extends('layouts.admin')
@section('title')
    Edit Brief
@endsection
@section('content')
    <h1 class="text-center">Edit Brief</h1>
    <div class="container">
        <form method="POST" action="{{ route('prief.update', $priefs->id) }}">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" name="desc">{{$priefs->desc}}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit Brief</button>
        </form>
    </div>
@endsection
