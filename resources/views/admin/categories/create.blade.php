@extends('layouts.admin')
@section('title')
    Create Category
@endsection
@section('content')
    <h1 class="text-center">Create Category</h1>
    <div class="container">
        <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Category Name</label>
                <input type="text" class="form-control" name="cat_name">
                @error('cat_name')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Created By</label>
                <input type="text" class="form-control" name="created_by" value="{{ Auth::user()->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="cat_img">
                @error('cat_img')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
@endsection
