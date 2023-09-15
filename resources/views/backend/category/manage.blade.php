@extends('backend.master')
@section('content')
<main>
<div class="container-fluid px-4">
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Category Table
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>SLug</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td> {{ $loop->index+1 }} </td>
                    <td> {{ $category->name }} </td>
                    <td> {{ $category->slug }} </td>
                    <td>
                        <a href= "{{ url('category/edit/'.$category->id) }}" class= "btn btn-sm btn-info">Edit</a>
                        <a href= "{{ url('category/delete/'.$category->id) }}" class= "btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>
@endsection
