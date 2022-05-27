@extends('layouts.admin')
@section('title')
    Create Rple
@endsection
@section('content')
    <h1 class="text-center">Create Role</h1>
    <div class="container">
        <form method="POST" action="{{route('roles.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Role Name</label>
                <input type="text" class="form-control" name="role_name">
            </div>
            <button type="submit" class="btn btn-primary">Create Role</button>
        </form>
    </div>
@endsection
