@extends('layouts.admin')
@section('title')
    All Roles
@endsection
@section('content')
    <h1 class="text-center">All Roles</h1>
    <a href="{{ route('roles.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> &nbsp; Create Role</a>
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                    <th class="text-secondary opacity-7">Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{ $role->role }}</h6>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $role->created_at->diffForHumans() }}</span>
                        </td>
                        <td class="align-middle d-flex">
                            <a href="{{route('roles.show' , $role->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('roles.edit' , $role->id)}}" class="btn btn-secondary">Edit</a>
                            <form method="POST" action="{{route('roles.destroy' , $role->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
