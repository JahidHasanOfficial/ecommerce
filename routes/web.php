<?php

use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

{
    Route::get('/',[FrontendController::class, 'index']);
};

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // category route list---
    Route::get('/category/add',[CategoryController::class, 'categoryAddForm'])->name('category.add');
    Route::get('/category/manage',[CategoryController::class, 'categoryManage'])->name('category.manage');
    Route::post('/category/store',[CategoryController::class, 'categoryStore'])->name('category.store');
    Route::get('/category/edit/{id}',[CategoryController::class, 'categoryEdit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class, 'categoryUpadte'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class, 'categoryDelete'])->name('category.delete');

  ///  Subcategory route list---
  Route::get('/subcategory/add',[SubcategoryController::class, 'subcategoryAddForm'])->name('subcategory.add');
 Route::get('/subcategory/manage',[SubcategoryController::class, 'subcategoryManage'])->name('subcategory.manage');
 Route::post('/subcategory/store',[SubcategoryController::class, 'subcategoryStore'])->name('subcategory.store');


 //product route list-----
 Route::get('/product/add',[ProductController::class, 'productAddForm'])->name('product.add');
    Route::get('/product/manage',[ProductControllerr::class, 'productManageForm'])->name('product.manage');
 

});


//function () {
  //      return view('dashboard');
  //  })->name('dashboard');