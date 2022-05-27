<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(5);
        return view('admin.products.all' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pro_img = $request->file("pro_img");
        $productImage = time()."_".$pro_img->getClientOriginalName();
        $pro_img->move('adminpanel/assets/img/products', $productImage);
        Product::create([
            'image'=>$productImage,
            'product_name'=>$request->product_name,
            'desc'=>$request->desc,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'created_by'=>$request->created_by,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $products = Product::findOrFail($id);
        return view('admin.products.show' , compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit' , compact('products' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pro_img = $request->file("pro_img");
        $productImage = time()."_".$pro_img->getClientOriginalName();
        $pro_img->move('adminpanel/assets/img/product', $productImage);
        $products = Product::findOrFail($id);
        $products->update([
            'image'=>$productImage,
            'product_name'=>$request->product_name,
            'desc'=>$request->desc,
            'price'=>$request->price,
            'image' =>$productImage,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->back();
    }
}
