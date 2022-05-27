@extends('layouts.admin')
@section('title')
    Show Information
@endsection
@section('content')
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Desc</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cat_pro as $product)
                <tr>
                    <td><img src="{{URL::asset('adminpanel/assets/img/products/')}}/{{$product->image}}" alt="" height="70vh"></td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->desc}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
