@extends('layouts.admin')
@section('title')
    Edit Role
@endsection
@section('content')
    <h1 class="text-center">Edit {{ $roles->role }} info</h1>
    <div class="container">
        <form method="POST" action="{{ route('roles.update', $roles->id) }}">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Role Name</label>
                <input type="text" class="form-control" name="role_name" value="{{ $roles->role }}">
            </div>
            <button type="submit" class="btn btn-primary">Edit Role</button>
        </form>
    </div>
@endsection
