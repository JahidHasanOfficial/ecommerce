@extends('backend.master')

@section('content')

<div class="container">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Add a New Category</div>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success">{{session()->get('success') }}</div>
            @endif
            <form action="{{ route('category.store') }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="">Name</label> <br>
            <input type="text" class="form-control" name="name" placeholder ="Category name"  >
        </div>
        <button type= "submit" class="btn btn-sm mt-2 btn-primary">Save</button>
            </form>
        </div>
    </div>
    </div>
</div>


@endsection