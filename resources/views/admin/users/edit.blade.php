@extends('layouts.admin')
@section('title')
    Edit User
@endsection
@section('content')
    <h1 class="text-center">Edit {{ $users->name }} info</h1>
    <div class="container">
        @if ($users->image == null)
            <div class="img">
                <img src="{{ URL::asset('adminpanel/Default.png') }}" alt="" class="image">
            </div>
        @else
            <div class="img">
                <img src="{{ URL::asset('adminpanel/assets/img/users/') }}/{{ $users->image }}" alt=""
                    class="image">
            </div>
        @endif
        <form method="POST" action="{{ route('users.update', $users->id) }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control" name="name" value="{{ $users->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="{{ $users->email }}">
            </div>
            <div class="mb-3">
                <select class="form-select" name="role_id">
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->role}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="user-img">
            </div>
            <button type="submit" class="btn btn-primary">Edit Account</button>
        </form>
    </div>
@endsection
