@extends('layouts.admin')
@section('title')
    All Categories
@endsection
@section('content')
    <h1 class="text-center">All Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> &nbsp; Create
        Category</a>
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created By</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At
                    </th>
                    <th class="text-secondary opacity-7">Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        @if ($category->image == null)
                            <td>
                                <img src="{{ URL::asset('adminpanel/Default.png') }}" alt=""
                                    class="avatar avatar-sm me-3">
                            </td>
                        @else
                            <td>
                                <img src="{{ URL::asset('adminpanel/assets/img/categories/') }}/{{ $category->image }}"
                                    alt="" class="avatar avatar-sm me-3">
                            </td>
                        @endif
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $category->category_name }}</h6>
                            </div>
                        </td>
    </div>
    <td>
        {{ $category->created_by }}
    </td>
    <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">{{ $category->created_at->diffForHumans() }}</span>
    </td>
    @if (Auth::user()->role_id == 1)
        <td class="align-middle d-flex">
            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">Show</a>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-secondary">Edit</a>
            <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </td>
    @else
        <td class="align-middle d-flex">
            <a href="{{ route('categories.show', $categories->id) }}" class="btn btn-info">Show</a>
        </td>
    @endif
    </tr>
    @endforeach
    </tbody>
    </table>
    {{ $categories->links('pagination::bootstrap-5') }}
    </div>
@endsection
