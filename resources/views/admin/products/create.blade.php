@extends('layouts.admin')
@section('title')
    Create Product
@endsection
@section('content')
    <h1 class="text-center">Create Product</h1>
    <div class="container">
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product_name">
                @error('product_name')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder="Leave a Desc here" name="desc"></textarea>
                @error('desc')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Price</label>
                <input type="text" class="form-control" name="price">
                @error('price')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <select class="form-select" name="category_id">
                    <option selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Created By</label>
                <input type="text" class="form-control" name="created_by" value="{{ Auth::user()->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Email</label>
                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="pro_img">
                @error('pro_img')
                    <small class="text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
@endsection
