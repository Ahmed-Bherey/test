@extends('layouts.admin')
@section('title')
    All Products
@endsection
@section('content')
    <h1 class="text-center">All Users</h1>
    <a href="{{ route('products.create') }}" class="btn btn-success"><i class="fa-solid fa-user-plus"></i> &nbsp; Create Products</a>
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created By</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                    <th class="text-secondary opacity-7">Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        @if ($product->image == null)
                            <td>
                                <img src="{{ URL::asset('adminpanel/Default.png') }}" alt=""
                                    class="avatar avatar-sm me-3">
                            </td>
                        @else
                            <td>
                                <img src="{{ URL::asset('adminpanel/assets/img/products/') }}/{{ $product->image }}"
                                    alt="" class="avatar avatar-sm me-3">
                            </td>
                        @endif
                        <td>
                            {{ $product->product_name }}
                        </td>
                        <td>
                            {{ $product->price }}
                        </td>
                        <td>
                            {{$product->categories->category_name}}
                        </td>
                        <td>
                            {{ $product->created_by }}
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $product->created_at->diffForHumans() }}</span>
                        </td>
                        @if (Auth::user()->role_id == 1)
                        <td class="align-middle d-flex">
                            <a href="{{route('products.show' , $product->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('products.edit' , $product->id)}}" class="btn btn-secondary">Edit</a>
                            <form method="POST" action="{{route('products.destroy' , $product->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                        @else
                        <td class="align-middle d-flex">
                            <a href="{{route('products.show' , $product->id)}}" class="btn btn-info">Show</a>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links('pagination::bootstrap-5')}}
    </div>
@endsection
