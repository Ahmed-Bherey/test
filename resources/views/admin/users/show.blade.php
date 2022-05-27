@extends('layouts.admin')
@section('title') Show Information @endsection
@section('content')
    <h1 class="text-center">{{$users->name}} info</h1>
    <div class="container">
        <div class="img">
            <img src="{{ URL::asset('adminpanel/assets/img/users/') }}/{{ $users->image }}" alt="" class="image">
        </div>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control" value="{{$users->name}}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" value="{{$users->email}}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Created At</label>
                <input type="text" class="form-control" value="{{$users->created_at->diffForHumans()}}" readonly>
            </div>
        </form>
    </div>
@endsection