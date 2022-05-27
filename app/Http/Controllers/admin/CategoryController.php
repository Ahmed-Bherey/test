<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::paginate(5);
        return view('admin.categories.all' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
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
        $catImg = $request->file("cat_img");
        $categoryImage = time()."_".$catImg->getClientOriginalName();
        $catImg->move('adminpanel/assets/img/categories', $categoryImage);
        Category::create([
            'category_name'=>$request->cat_name,
            'image'=>$categoryImage,
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
        // $categories_products =Category::findOrFail($id)->product;
        // $categories =Category::findOrFail($id);
        // return view('admin.categories.show' , compact('categories' , 'categories_products'));

        $categories =Category::with(['products' => function($q){
            $q -> Select('product_name' , 'image' , 'price', 'desc' , 'category_id');
        }])->findOrFail($id);
        $cat_pro = $categories->products;
        return view('admin.categories.show' , compact('cat_pro'));
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
        $categories =Category::findOrFail($id);
        return view('admin.categories.edit' , compact('categories'));
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
        $catImg = $request->file("cat_img");
        $categoryImage = time()."_".$catImg->getClientOriginalName();
        $catImg->move('adminpanel/assets/img/categories', $categoryImage);
        $categories = Category::findOrFail($id);
        $categories->update([
            'category_name' =>$request->category_name,
            'image' =>$categoryImage,
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
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->back();
    }
}
