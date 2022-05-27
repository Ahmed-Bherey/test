@extends('layouts.admin')
@section('title')
    All Users
@endsection
@section('content')
    <h1 class="text-center">All Users</h1>
    <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fa-solid fa-user-plus"></i> &nbsp; Create User</a>
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                    <th class="text-secondary opacity-7">Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                @if ($user->image == null)
                                    <div>
                                        <img src="{{ URL::asset('adminpanel/Default.png') }}" alt=""
                                            class="avatar avatar-sm me-3">
                                    </div>
                                @else
                                    <div>
                                        <img src="{{ URL::asset('adminpanel/assets/img/users/') }}/{{ $user->image }}"
                                            alt="" class="avatar avatar-sm me-3">
                                    </div>
                                @endif
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $user->created_at->diffForHumans() }}</span>
                        </td>
                        @if (Auth::user()->role_id == 1)
                        <td class="align-middle d-flex">
                            <a href="{{route('users.show' , $user->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('users.edit' , $user->id)}}" class="btn btn-secondary">Edit</a>
                            <form method="POST" action="{{route('users.destroy' , $user->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                        @else
                        <td class="align-middle d-flex">
                            <a href="{{route('users.show' , $user->id)}}" class="btn btn-info">Show</a>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links('pagination::bootstrap-5')}}
    </div>
@endsection
