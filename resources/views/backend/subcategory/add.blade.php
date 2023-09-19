
@extends('backend.master')

@section('content')

<div class="container">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Add New SubCategory</div>
        </div>
        <div class="card-body">

            @if (session()->has('success'))
            <div class="alert alert-success">{{session()->get('success') }}</div>
            @endif
            <form action="{{ route('subcategory.store') }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="">Categorey Name</label> <br>
          <select class="form-controll" name="category_id">
            <option selected disabled>Select A Category</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{$category->name}}</option>
            @endforeach
          </select>

          
        </div>
        <div class="form-group">
            <label for="">Name</label> <br>
            <input type="text" class="form-controll" name="name" placeholder ="Category name"  >
        </div>
        <button type= "submit" class="btn btn-sm mt-2 btn-primary">Save</button>
            </form>
        </div>
    </div>
    </div>
</div>


@endsection