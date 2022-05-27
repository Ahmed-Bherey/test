@extends('layouts.admin')
@section('title')
    Create User
@endsection
@section('content')
    <h1 class="text-center">Create User</h1>
    <div class="container">
        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control" name="name">
                @error('name')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
                @error('email')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
                @error('password')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <select class="form-select" name="role_id">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                    @endforeach
                </select>
                @error('role_id')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="user-img">
                @error('user-img')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Account</button>
        </form>
    </div>
@endsection
