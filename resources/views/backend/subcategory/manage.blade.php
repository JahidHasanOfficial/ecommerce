@extends('backend.master')
@section('content')
<main>
<div class="container-fluid px-4">
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        SubCategory Table
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Name</th>
                    <th>SLug</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($subcategories as $subcategory)
             
             <tr>
                 <td> {{ $loop->index+1 }} </td>
                 <td>{{ $subcategory->category->name }}</td>
                 <td> {{ $subcategory->name }} </td>
                 <td> {{ $subcategory->slug }} </td>
                 <td>
                     <a href= "{{ url('subcategory/edit/'.$subcategory->id) }}" class= "btn btn-sm btn-info">Edit</a>
                     <a href= "{{ url('subcategory/delete/'.$subcategory->id) }}" class= "btn btn-sm btn-danger">Delete</a>
                 </td>
             </tr>
             @endforeach
               
            </tbody>
        </table>
    </div>
</div>
</div>
</main>
@endsection