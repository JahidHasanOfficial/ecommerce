<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class ProductController extends Controller
{
    public function productManage()
    {
       
        return view('backend.product.index');
    }
    public function productAddForm()
    {
        $categories = Category::orderBy('id','desc')->get();
        $subcategories = Subcategory::orderBy('id','desc')->get();
        return view('backend.product.create',compact('categories','subcategories'));
    }

    public function productStore(Request $request){
        $this->validate($request,[
            'category_id'=>'required|integer',
            'sub_category_id'=>'required|integer',
            'buy_price'=>'required',
            'sale_price'=>'required',
            'long_description'=>'required',
            'image'=>'required|image',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move('product',$imageName);
        Product::create([
            'category_id'=>$request->category_id,
            'sub_category_id'=>$request->sub_category_id,
            'name'=>$request->name,
            'slug'=>str::slug($request->name),
            'buy_price'=>$request->buy_price,
            'sale_price'=>$request->sale_price,
            'short_description'=>$request->short_description,
            'long_description'=>$request->long_description,
            'image'=>  $imageName,
        ]);
        return redirect()->back()->with('success', 'Product has been created');
    }
 }
