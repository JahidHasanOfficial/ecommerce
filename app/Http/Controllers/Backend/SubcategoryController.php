<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class SubcategoryController extends Controller
 {
    public function subcategoryAddForm(){
         $categories = Category::orderBy('id','desc')->get();
         return view('backend.subcategory.add', compact('categories'));
     }

          public function subcategoryStore(Request $request){
       $this->validate($request, [
            'category_id' => 'required|integer',
            'name' => 'required|string',
        ]);
        Subcategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => str::slug($request->name),
        ]);
        return redirect()->back()->withSuccess('Subcategory has been created');
    }
   

   public function subcategoryManage()
   {
    $subcategories = Subcategory::with('category')->orderBy('id','desc')->get();

         return view('backend.subcategory.manage', compact('subcategories'));
   }
 }
