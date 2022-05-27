@extends('layouts.admin')
@section('title')
    Show Information
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center mt-4">All {{$roles->role}}</h1>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles_users as $role)
                <tr>
                    @if ($role->image == null)
                        <td>
                            <img src="{{ URL::asset('adminpanel/Default.png') }}" alt=""
                                            class="avatar avatar-sm me-3">
                        </td>
                    @else
                        <td>
                            <img src="{{ URL::asset('adminpanel/assets/img/users/') }}/{{ $role->image }}"
                                            alt="" class="avatar avatar-sm me-3">
                        </td>
                    @endif
                    <td>{{$role->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
