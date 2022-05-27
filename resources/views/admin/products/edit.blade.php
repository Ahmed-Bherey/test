@extends('layouts.admin')
@section('title')
    Edit User
@endsection
@section('content')
    <h1 class="text-center">Edit {{ $products->name }} info</h1>
    <div class="container">
        @if ($products->image == null)
            <div class="img">
                <img src="{{ URL::asset('adminpanel/Default.png') }}" alt="" class="image">
            </div>
        @else
            <div class="img">
                <img src="{{ URL::asset('adminpanel/assets/img/products/') }}/{{ $products->image }}" alt=""
                    class="image">
            </div>
        @endif
        <form method="POST" action="{{ route('products.update', $products->id) }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product_name" value="{{ $products->product_name }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{ $products->price }}">
            </div>
            <div class="mb-3">
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="pro_img">
            </div>
            <button type="submit" class="btn btn-primary">Edit Account</button>
        </form>
    </div>
@endsection
