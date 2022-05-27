@extends('layouts.admin')
@section('title')
    Edit User
@endsection
@section('content')
    <h1 class="text-center">Edit {{ $categories->category_name }} info</h1>
    <div class="container">
        @if ($categories->image == null)
            <div class="img">
                <img src="{{ URL::asset('adminpanel/Default.png') }}" alt="" class="image">
            </div>
        @else
            <div class="img">
                <img src="{{ URL::asset('adminpanel/assets/img/categories/') }}/{{ $categories->image }}" alt=""
                    class="image">
            </div>
        @endif
        <form method="POST" action="{{ route('categories.update', $categories->id) }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Category Name</label>
                <input type="text" class="form-control" name="category_name" value="{{ $categories->category_name }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Created By</label>
                <input type="text" class="form-control" name="created_by" value="{{ Auth::user()->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="cat_img">
            </div>
            <button type="submit" class="btn btn-primary">Edit Category</button>
        </form>
    </div>
@endsection
