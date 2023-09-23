@extends('backend.master')
@section('content')
<main>
<div class="container-fluid px-4">
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Product Table
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Category/Subcategory</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>
@endsection
