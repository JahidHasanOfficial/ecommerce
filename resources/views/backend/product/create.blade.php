@extends('backend.master')

@section('content')

<div class="container">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Add a New Product</div>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success">{{session()->get('success') }}</div>
            @endif
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" >
        @csrf

        <div class="form-group">
            <label for="">Category Name</label>
            <select class="form-control" name="category_id" id="category_id" >
                <option selected disabled> Select a Category</option>
               @foreach($categories as $category)
               <option value="{{ $category->id}}">{{$category->name}}</option>
               @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Subcategory Name</label>
            <select class="form-control" name="sub_category_id" id="sub_category_id" >
                <option selected disabled> Select a Subcategory</option>
               @foreach($subcategories as $subcategory)
               <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
               @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Name</label> <br>
            <input type="text" class="form-control" name="name" placeholder ="Product name"  >
        </div>

        <div class="form-group">
            <label for="">Buy Price</label> <br>
            <input type="text" class="form-control" name="buy_price" placeholder ="Product Buy Price"  >
        </div>

        <div class="form-group">
            <label for="">Sale Price</label> <br>
            <input type="text" class="form-control" name="sale_price" placeholder ="Product Sale Price"  >
        </div>

        <div class="form-group">
            <label for="">Short Description</label> <br>
           <textarea class="form-control" name="short_description" rows="5"  placeholder ="Product Short Description" ></textarea>
        </div>

        <div class="form-group">
            <label for="">Long Description</label> <br>
           <textarea class="form-control" name="long_description" id="summernote" placeholder =" Product Long Description" ></textarea>
        </div>

        <div class="form-group">
            <label for="">Product Image</label> <br>
            <input type="file" class="form-control" name="image">
        </div>

        <button type= "submit" class="btn btn-sm mt-2 btn-primary">Save</button>
            </form>
        </div>
    </div>
    </div>
</div>


@endsection