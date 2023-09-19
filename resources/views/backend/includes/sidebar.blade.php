<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
<div class="sb-sidenav-menu">
    <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
        </a>
        
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#category" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Category
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="category" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('category.add') }}">Add Category</a>
                <a class="nav-link" href="{{ route('category.manage') }}">Manage Category</a>
            </nav>
        </div>


        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#subcategory" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            SubCategory
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="subcategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('subcategory.add') }}">Add SubCategory</a>
                <a class="nav-link" href="{{ route('subcategory.manage') }}">Manage SubCategory</a>
            </nav>
        </div>


        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#product" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Product
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="product" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('product.add') }}">Add Product</a>
                <a class="nav-link" href="{{ route('product.manage') }}">Manage Product</a>
            </nav>
        </div>
        

        
    </div>
</div>
<div class="sb-sidenav-footer">
    <div class="small">Logged in as:</div>
    {{ auth()->user()->name }}
</div>
</nav>